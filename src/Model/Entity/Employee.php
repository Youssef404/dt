<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property \Cake\I18n\FrozenDate|null $birth_date
 * @property \Cake\I18n\FrozenDate|null $hire_date
 * @property string $role
 *
 * @property \App\Model\Entity\Voucher[] $vouchers
 */
class Employee extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'birth_date' => true,
        'hire_date' => true,
        'role' => true,
        'vouchers' => true
    ];
}
