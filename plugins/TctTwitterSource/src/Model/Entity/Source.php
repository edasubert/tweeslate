<?php
namespace TctTwitterSource\Model\Entity;

use Cake\ORM\Entity;

/**
 * Source Entity.
 *
 * @property int $id
 * @property string $foreignid
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property int $language_id
 * @property \App\Model\Entity\Language $language
 * @property string $text
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $meta_data
 * @property \App\Model\Entity\TranslationRequest[] $translation_requests
 * @property \App\Model\Entity\Translation[] $translations
 */
class Source extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
