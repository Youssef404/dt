<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductsVoucher Entity
 *
 * @property int $product_id
 * @property int $voucher_id
 * @property int $quantity
 * @property float|null $unit_price
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Voucher $voucher
 */
class ProductsVoucher extends Entity
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
        'quantity' => true,
        'unit_price' => true,
        'product' => true,
        'voucher' => true
    ];
}
