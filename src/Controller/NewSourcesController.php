<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventListenerInterface;
use Cake\ORM\TableRegistry;
use Cake\Mailer\MailerAwareTrait;

/**
 * NewSources Controller
 *
 */
class NewSourcesController extends AppController implements EventListenerInterface
{
    use MailerAwareTrait;
    
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
     * @param array int id of new sources, target languages
     * @return void
     */
    public function requestForTranslation($event)
    {
        foreach( $event->data['newSources'] as $eventData )
        {
            $sourceId = $eventData[0];
            $targetLanguageId = $eventData[1];

            // get all the data
            $source = TableRegistry::get('sources')->findById($sourceId)->first();

            $sourceLanguage = TableRegistry::get('languages')->findById($source->language_id)->first();
            $targetLanguage = TableRegistry::get('languages')->findById($targetLanguageId)->first();

            // select suitable translators
            $translators = $this->selectTranslators($source->id, $targetLanguage->id);
            if (empty($translators)){
                continue;
            }

            foreach( $translators as $translator) {
            // file in translation requests
                $translationRequest = $this->createTranslationRequest($translator, $source, $targetLanguage);

                if ($translationRequest === false) {
                    Log::write('newSource', 'createTranslationRequest fail: source:id = '.$source->id.'; user_id = '.$tramslator['id'].'; targetLanguage_id = '.$targetLanguage->id);
                    continue;
                }
            // notify translators about the requests
                $this->getMailer('translation')->send('translationRequest', [$source, $translator, $translationRequest['hash'], $sourceLanguage, $targetLanguage]);
            }
            // do machine translation
        }
    }
    
    /*
     * 
     * selectTranslators method
     *
     * @param integer id of source to be translated
     * @param integer id of language the source is to be translated into
     * @return array suitable translators
     * 
     */
    private function selectTranslators($sourceId, $targetLanguageId)
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

    /**
     * createTranslationRequest method
     * creates translation request in database
     *
     * @param $translator
     * @param $source
     * @param $targetLanguage
     */
    private function createTranslationRequest($translator, $source, $targetLanguage)
    {
        $hash = md5($source->id.$translator['email'].$targetLanguage->name);

        $translationRequestTable = TableRegistry::get('TranslationRequests');
        $translationRequest = $translationRequestTable->newEntity();

        $translationRequest->user_id = $translator['id'];
        $translationRequest->language_id = $targetLanguage->id;
        $translationRequest->source_id = $source->id;
        $translationRequest->hash = $hash;

        if ($translationRequestTable->save($translationRequest)) {
            return ['id' =>$translationRequest->id, 'hash' => $hash];
        }
        return false;
    }
}
