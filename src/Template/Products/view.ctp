<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Suppliers'), ['controller' => 'Suppliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplier'), ['controller' => 'Suppliers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vouchers'), ['controller' => 'Vouchers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Voucher'), ['controller' => 'Vouchers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Min Quantity') ?></th>
            <td><?= $this->Number->format($product->min_quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit Price') ?></th>
            <td><?= $this->Number->format($product->unit_price) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Suppliers') ?></h4>
        <?php if (!empty($product->suppliers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->suppliers as $suppliers): ?>
            <tr>
                <td><?= h($suppliers->id) ?></td>
                <td><?= h($suppliers->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Suppliers', 'action' => 'view', $suppliers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Suppliers', 'action' => 'edit', $suppliers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Suppliers', 'action' => 'delete', $suppliers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suppliers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Vouchers') ?></h4>
        <?php if (!empty($product->vouchers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->vouchers as $vouchers): ?>
            <tr>
                <td><?= h($vouchers->id) ?></td>
                <td><?= h($vouchers->date) ?></td>
                <td><?= h($vouchers->employee_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vouchers', 'action' => 'view', $vouchers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vouchers', 'action' => 'edit', $vouchers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vouchers', 'action' => 'delete', $vouchers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vouchers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
