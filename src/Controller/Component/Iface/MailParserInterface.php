<?php
namespace App\Controller\Component\Iface;

interface MailParserInterface
{
    /*
     * getId method
     *
     * @param string body of mail to be parsed
     *
     */
    public function getId($body);

    /*
     * getPhrase method
     *
     * @param string body of mail to be parsed
     *
     */
    public function getPhrase($body);
}
