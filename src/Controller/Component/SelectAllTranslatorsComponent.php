<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

require_once 'Interface/SelectTranslatorInterface.php';

class SelectAllTranslatorsComponent extends Component implements SelectTranslatorInterface
{
    public function selectTranslators($sourceId, $targetLanguageId)
    {
        $source = TableRegistry::get('sources')->findById($sourceId)->first();

        $users = TableRegistry::get('users')->find('all', ['contain' => ['LanguagesDirection.Languages']]);
        $translators = array();

        foreach ( $users as $user ) {
            $translators[] = ['id' => $user->id,
                'email' => $user->email,
                'name' => $user->name
            ];
        }
        return $translators;
    }
}