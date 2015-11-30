<?php
namespace TctTwitterSource\Controller;

use TctTwitterSource\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Sources Controller
 *
 * @property \TctTwitterSource\Model\Table\SourcesTable $Sources
 */
class SourcesController extends AppController
{

    /**
     * Add method
     *
     * @return void
     */
    public function add( $foreignid, $language, $text, $meta_data, $userid )
    {
        $queryLanguage = TableRegistry::get('Languages')->findByBcp47($language);
        $queryUnique = TableRegistry::get('Sources')->findByForeignid($foreignid)->first();
        
        if (!$queryUnique && $result = $queryLanguage->first()) {
            $source = $this->Sources->newEntity();
            
            $source->foreignid = $foreignid;
            $source->language_id = $result->id;
            $source->user_id = $userid;
            $source->text = $text;
            $source->meta_data = $meta_data;
            
            if ($this->Sources->save($source))
            {
                return $source;
            }
        }
        return false;
    }
}
