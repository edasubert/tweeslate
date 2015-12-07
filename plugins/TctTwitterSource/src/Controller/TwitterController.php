<?php

namespace TctTwitterSource\Controller;

use TctTwitterSource\Controller\AppController;
use TctTwitterSource\Controller\SourcesController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Core\Configure;

use TwitterAPIExchange;

/**
 * TwitterUsers Controller
 */

class TwitterController extends AppController
{
    
    /**
     * addTweet method
     *
     * search twitter for tweets and save to database
     * @event Plugin.SourcePush When new sources saved
     */
    public function pullSaveTweets()
    {
        // retreive tweets
        $twitter = new \TwitterAPIExchange(Configure::read('Twitter'));
        
        $newSources = array();
        
        $queries = TableRegistry::get('TwitterQueries')->find('all')->where(['active' => 1]); // get active queries
        
        foreach ($queries as $query)
        {
            $url = $query->url;
            $getfield = $query->getfield;
            $requestMethod = 'GET';
            
            $result = $twitter->setGetfield($getfield)
                              ->buildOauth($url, $requestMethod)
                              ->performRequest();
            
            if (!$result)
            {
                Log::write('sourcePlugin', 'Twitter Query Fail: id = '.$query->id.'\t'.$query->url.'/'.$query->getfield );
                continue;
            }
            
            $result = $this->resultDecode( $result, $query );
            
            $sources = new SourcesController();
            
            // save to database
            foreach ( $result as $tweet )
            {
                if ($source = $sources->add($tweet['id_str'], $tweet['lang'], $tweet['text'], json_encode( $tweet ), $query->user_id))
                {
                    array_push($newSources, [$source->id, $query->language_target]);
                }
            }
        }
        
        // dispatch event only if some tweets added
        if ( ! empty( $newSources ) )
        {
          $event = new Event('Plugin.SourcePush', $this, ['newSources' => $newSources]);
          $this->eventManager()->dispatch($event);
        }
        
        $this->set('newSources', $newSources);
    }
    
    /*
     * resultDecode method
     * 
     * @param json $result result of Twitter API
     * @param object $query TwitterQuery entity
     * @return array $result decoded and unified to array of tweets
     * 
     */
        
    private function resultDecode( $result, $query )
    {
        $result = json_decode($result, true);
        
        if ( !(strpos($query->url, 'search') === false)) // search query has a different array format
        {
            $result = $result['statuses'];
        }
        
        return $result;
    }
}
?>
