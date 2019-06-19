<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsVoucher[]|\Cake\Collection\CollectionInterface $productsVouchers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Products Voucher'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vouchers'), ['controller' => 'Vouchers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Voucher'), ['controller' => 'Vouchers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsVouchers index large-9 medium-8 columns content">
    <h3><?= __('Products Vouchers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voucher_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unit_price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productsVouchers as $productsVoucher): ?>
            <tr>
                <td><?= $productsVoucher->has('product') ? $this->Html->link($productsVoucher->product->name, ['controller' => 'Products', 'action' => 'view', $productsVoucher->product->id]) : '' ?></td>
                <td><?= $productsVoucher->has('voucher') ? $this->Html->link($productsVoucher->voucher->id, ['controller' => 'Vouchers', 'action' => 'view', $productsVoucher->voucher->id]) : '' ?></td>
                <td><?= $this->Number->format($productsVoucher->quantity) ?></td>
                <td><?= $this->Number->format($productsVoucher->unit_price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productsVoucher->product_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsVoucher->product_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsVoucher->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsVoucher->product_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
