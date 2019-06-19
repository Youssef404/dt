<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsVoucher $productsVoucher
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productsVoucher->product_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productsVoucher->product_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products Vouchers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vouchers'), ['controller' => 'Vouchers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Voucher'), ['controller' => 'Vouchers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsVouchers form large-9 medium-8 columns content">
    <?= $this->Form->create($productsVoucher) ?>
    <fieldset>
        <legend><?= __('Edit Products Voucher') ?></legend>
        <?php
            echo $this->Form->control('quantity');
            echo $this->Form->control('unit_price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
