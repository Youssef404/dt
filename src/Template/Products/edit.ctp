<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
        echo $this->Form->control('name');
        echo $this->Form->control('min_quantity');
        echo $this->Form->control('unit_price');
        echo $this->Form->control('suppliers._ids', ['options' => $suppliers]);
        echo $this->Form->control('vouchers._ids', ['options' => $vouchers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
