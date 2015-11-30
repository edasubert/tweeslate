<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TranslationRequest Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property int $language_id
 * @property \App\Model\Entity\Language $language
 * @property int $source_id
 * @property \App\Model\Entity\Source $source
 * @property string $hash
 * @property \Cake\I18n\Time $created
 * @property int $translation_id
 * @property \App\Model\Entity\Translation $translation
 */
class TranslationRequest extends Entity
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
