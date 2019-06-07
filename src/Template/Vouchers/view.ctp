<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voucher $voucher
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Voucher'), ['action' => 'edit', $voucher->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Voucher'), ['action' => 'delete', $voucher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voucher->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vouchers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Voucher'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vouchers view large-9 medium-8 columns content">
    <h3><?= h($voucher->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $voucher->has('employee') ? $this->Html->link($voucher->employee->id, ['controller' => 'Employees', 'action' => 'view', $voucher->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($voucher->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($voucher->date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($voucher->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Min Quantity') ?></th>
                <th scope="col"><?= __('Unit Price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($voucher->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->name) ?></td>
                <td><?= h($products->min_quantity) ?></td>
                <td><?= h($products->unit_price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
