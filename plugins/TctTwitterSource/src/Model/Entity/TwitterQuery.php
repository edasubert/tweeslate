<?php
namespace TctTwitterSource\Model\Entity;

use Cake\ORM\Entity;

/**
 * TwitterQuery Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \TctTwitterSource\Model\Entity\User $user
 * @property string $url
 * @property string $getfield
 * @property bool $active
 * @property int $language_target
 * @property string $description
 * @property \Cake\I18n\Time $created
 */
class TwitterQuery extends Entity
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
