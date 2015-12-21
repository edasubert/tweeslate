<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventListenerInterface;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Mailer\MailerAwareTrait;
use Cake\Core\Configure;
use PhpImap;

/**
 * NewTranslations Controller
 *
 */
class NewTranslationsController extends AppController implements EventListenerInterface
{
    public function implementedEvents()
    {
        return [
            'TranslationPush' => 'pullSaveTranslations',
        ];
    }

    public function checkNewMail()
    {
        $imap = Configure::read('EmailReceive')['imap'];
        $mailbox = new PhpImap\Mailbox(
            $imap['path'],
            $imap['login'],
            $imap['password']
        );

        $mailsIds = $mailbox->searchMailBox('ALL');

        // if there are new emails dispatch event
        if($mailsIds) {
            $event = new Event('TranslationPush', $this, []);
            $this->eventManager()->dispatch($event);
        }
    }

    public function pullSaveTranslations()
    {
        $imap = Configure::read('EmailReceive')['imap'];
        $mailbox = new PhpImap\Mailbox(
            $imap['path'],
            $imap['login'],
            $imap['password']
        );

        $mailsIds = $mailbox->searchMailBox('ALL');
        if(!$mailsIds) {
            die('Mailbox is empty');
        }

        foreach($mailsIds as $mailId) {
            $mail = $mailbox->getMail($mailId);
            var_dump($mail);
        }

        $this->autoRender = false;
    }

}