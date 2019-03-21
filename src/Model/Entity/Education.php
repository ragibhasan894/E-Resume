<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Education Entity
 *
 * @property int $id
 * @property string $degree_title
 * @property string $institute
 * @property string|null $start
 * @property string|null $end
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Education extends Entity
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
        'degree_title' => true,
        'institute' => true,
        'start' => true,
        'end' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
