<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Voucher Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $date
 * @property int|null $employee_id
 * @property bool|null $type
 * @property float|null $montant
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\Product[] $products
 */
class Voucher extends Entity
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
        'date' => true,
        'employee_id' => true,
        'type' => true,
        'montant' => true,
        'employee' => true,
        'products' => true
    ];
}
