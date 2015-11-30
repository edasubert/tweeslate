<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $name
 * @property string $description
 * @property \Cake\I18n\Time $vacation
 * @property \Cake\I18n\Time $active
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Scoring[] $scorings
 * @property \App\Model\Entity\Source[] $sources
 * @property \App\Model\Entity\TranslationRequest[] $translation_requests
 * @property \App\Model\Entity\Translation[] $translations
 * @property \App\Model\Entity\Language[] $languages
 * @property \App\Model\Entity\UserAttribute[] $user_attributes
 */
class User extends Entity
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
