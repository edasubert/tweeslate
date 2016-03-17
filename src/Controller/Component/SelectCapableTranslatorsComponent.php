<?php
namespace App\Controller\Component;

use App\Controller\Component\Iface\SelectTranslatorInterface;
use Cake\Controller\Component;
use Cake\ORM\TableRegistry;


class SelectCapableTranslatorsComponent extends Component implements SelectTranslatorInterface
{
    public function selectTranslators($sourceId, $targetLanguageId)
    {
        $source = TableRegistry::get('sources')->findById($sourceId)->first();

        $users = TableRegistry::get('users')->find('all', ['contain' => ['LanguagesDirection.Languages']])
            ->find('active')
            ->find('available')
            ->find('language',['language_id' => $source->language_id, 'target' => false])
            ->find('language',['language_id' => $targetLanguageId, 'target' => true]);
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