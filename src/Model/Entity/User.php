<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string $address
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Accomplishment[] $accomplishments
 * @property \App\Model\Entity\Education[] $educations
 * @property \App\Model\Entity\Experience[] $experiences
 * @property \App\Model\Entity\Interest[] $interests
 * @property \App\Model\Entity\Skill[] $skills
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
        'name' => true,
        'email' => true,
        'phone' => true,
        'address' => true,
        'created' => true,
        'modified' => true,
        'accomplishments' => true,
        'educations' => true,
        'experiences' => true,
        'interests' => true,
        'skills' => true
    ];
}
