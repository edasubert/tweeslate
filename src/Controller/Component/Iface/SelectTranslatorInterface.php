<?php
namespace App\Controller\Component\Iface;

interface SelectTranslatorInterface
{
    /*
     * selectTranslators method
     *
     * @param integer id of source to be translated
     * @param integer id of language the source is to be translated into
     * @return array suitable translators
     *
     */
    public function selectTranslators($sourceId, $targetLanguageId);
}
