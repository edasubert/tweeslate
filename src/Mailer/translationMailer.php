<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * translation mailer
 *
 */
class translationMailer extends Mailer
{

    /**
     * mailer method
     * sends out translation request
     *
     * @param $source
     * @param $translator
     * @param $hash
     * @param $sourceLanguage
     * @param $targetLanguage
     */
    public function translationRequest( $source, $translator, $hash, $sourceLanguage, $targetLanguage )
    {
        $this
            ->transport('Debug')
            ->emailFormat('text')
            ->template('request')

            ->from('request@tweeslate.com')
            ->sender('request@tweeslate.com')
            ->replyTo('request@tweeslate.com')
            ->to($translator['email'])
            ->subject('request for translation ('.$sourceLanguage->iso6392B.' => '.$targetLanguage->iso6392B.')')

            ->viewVars([
                'source' => $source,
                'translator' => $translator,
                'hash' => $hash,
                'unsubscribe' => '',
                'sourceLanguage' => $sourceLanguage,
                'targetLanguage' => $targetLanguage,
            ]);

    }
    
    
}
