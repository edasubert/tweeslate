<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventListenerInterface;
use Cake\ORM\TableRegistry;

/**
 * NewSources Controller
 *
 */
class NewSourcesController extends AppController implements EventListenerInterface
{
    
    public function implementedEvents()
    {
        return [
            'Plugin.SourcePush' => 'requestForTranslation',
        ];
    }
    
    /**
     * requestForTranslation method
     * called after Plugin.SourcePush event is dispatched
     * 
     * @param array id of new sources, target languages
     * @return void
     */
    public function requestForTranslation($event)
    {
        foreach( $event->data['newSources'] as $source )
        {
          $id = $source[0];
          $targetLanguage = $source[1];
          
          // select suitable translators
          $translators = $this->selectTranslators($id, $targetLanguage);
          
          // file in translation requests
          
          // notify translators about the requests
          
          // do machine translation
        }
    }
    
    /*
     * 
     * selectTranslators method
     * @param integer id of source to be translated
     * @param integer id of language the source is to be translated into
     * @return array suitable translators
     * 
     */
    
    private function selectTranslators($id, $targetLanguage)
    {
        $where = [ 'name' => 'eda',
                   'Languages.bcp47' => $targetLanguage,
                 ];
        
        $users = TableRegistry::get('users')->find('all', ['contain' => ['Languages']])->where($where);
        
        foreach ( $users as $user )
        {
            var_dump( $user );
        }
    }
}
