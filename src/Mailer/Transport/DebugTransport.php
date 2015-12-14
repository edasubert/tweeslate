<?php
namespace App\Mailer\Transport;

use Cake\Mailer\AbstractTransport;
use Cake\Mailer\Email;
use Cake\Log\Log;

class DebugTransport extends AbstractTransport
{
    public function send(Email $email)
    {
        $headers = $email->getHeaders(['from', 'sender', 'replyTo', 'readReceipt', 'returnPath', 'to', 'cc', 'bcc']);
        $to = $headers['To'];
        $subject = str_replace(["\r", "\n"], '', $email->subject());
        $to = str_replace(["\r", "\n"], '', $to);
        $message = implode( '\n', $email->message());
        Log::write('debug', 'Mail: to('.$to.') subject('.$subject.') message('.$message.')');
        return ['headers' => $headers, 'message' => $message];
    }
}