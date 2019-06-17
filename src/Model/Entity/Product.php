<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property int|null $min_quantity
 * @property float $unit_price
 * @property int|null $quantity
 *
 * @property \App\Model\Entity\Supplier[] $suppliers
 * @property \App\Model\Entity\Voucher[] $vouchers
 */
class Product extends Entity
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
        'min_quantity' => true,
        'unit_price' => true,
        'quantity' => true,
        'suppliers' => true,
        'vouchers' => true
    ];
}
