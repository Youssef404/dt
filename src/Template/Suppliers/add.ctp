<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>

<div class="suppliers form large-9 medium-8 columns content">
    <?= $this->Form->create($supplier) ?>
    <fieldset>
        <legend><?= __('Add Supplier') ?></legend>
        <?php
        echo $this->Form->control('name');
        echo $this->Form->control('products._ids', ['options' => $products]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
