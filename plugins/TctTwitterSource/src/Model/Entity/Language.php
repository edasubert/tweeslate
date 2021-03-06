<?php
namespace TctTwitterSource\Model\Entity;

use Cake\ORM\Entity;

/**
 * Language Entity.
 *
 * @property int $id
 * @property string $iso6392B
 * @property string $bcp47
 * @property string $name
 * @property string $description
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Source[] $sources
 * @property \App\Model\Entity\TranslationRequest[] $translation_requests
 * @property \App\Model\Entity\Translation[] $translations
 * @property \App\Model\Entity\User[] $users
 */
class Language extends Entity
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
