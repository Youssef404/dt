<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsVoucher $productsVoucher
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Products Voucher'), ['action' => 'edit', $productsVoucher->product_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Products Voucher'), ['action' => 'delete', $productsVoucher->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsVoucher->product_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products Vouchers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products Voucher'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vouchers'), ['controller' => 'Vouchers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Voucher'), ['controller' => 'Vouchers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productsVouchers view large-9 medium-8 columns content">
    <h3><?= h($productsVoucher->product_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $productsVoucher->has('product') ? $this->Html->link($productsVoucher->product->name, ['controller' => 'Products', 'action' => 'view', $productsVoucher->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Voucher') ?></th>
            <td><?= $productsVoucher->has('voucher') ? $this->Html->link($productsVoucher->voucher->id, ['controller' => 'Vouchers', 'action' => 'view', $productsVoucher->voucher->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($productsVoucher->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit Price') ?></th>
            <td><?= $this->Number->format($productsVoucher->unit_price) ?></td>
        </tr>
    </table>
</div>
