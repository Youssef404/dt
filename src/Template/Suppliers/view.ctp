<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>

<div class="suppliers view large-9 medium-8 columns content">
    <h3><?= h($supplier->name) ?></h3>
    <table class="vertical-table table">
        <tr>
            <th scope="row" class="col-lg-4"><?= __('Name') ?></th>
            <td><?= h($supplier->name) ?></td>
        </tr>
        <tr>
            <th scope="row" class="col-lg-4"><?= __('Id') ?></th>
            <td><?= $this->Number->format($supplier->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($supplier->products)): ?>
            <table class="table table-striped table-bordered" id="datatable-button">
                <thead>
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Nom') ?></th>
                    <th scope="col"><?= __('Quantité minimal') ?></th>
                    <th scope="col"><?= __('Prix unitaire') ?></th>
                    <th scope="col"><?= __('Quantité') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($supplier->products as $product): ?>
                    <tr>
                        <td><?= $this->Number->format($product->id) ?></td>
                        <td><?= h($product->name) ?></td>
                        <td><?= h($product->min_quantity) ?></td>
                        <td><?= h($product->unit_price) ?></td>
                        <td><?= h($product->quantity) ?></td>
                        <td class="actions">
                            <?= $this->Html->link($this->Html->tag('i',"",['class'=>'fa fa-folder']).__('Afficher'), ['controller'=>'Products','action' => 'view', $product->id],['controller'=>'Products','class'=>'btn btn-primary btn-xs ','escape'=>false]) ?>
                            <?= $this->Html->link($this->Html->tag('i',"",['class'=>'fa fa-pencil']).__('Modifier'), ['controller'=>'Products','action' => 'edit', $product->id],['controller'=>'Products','class'=>'btn btn-info btn-xs ','escape'=>false]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>
