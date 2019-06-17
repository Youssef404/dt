<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voucher $voucher
 */
?>
<div class="vouchers view large-9 medium-8 columns content">
    <h3>Id : <?= h($voucher->id) ?></h3>
    <table class="vertical-table table">
        <tr>
            <th scope="row" class="col-lg-4"><?= __('Employee') ?></th>
            <td><?= $voucher->has('employee') ? $this->Html->link($voucher->employee->id, ['controller' => 'Employees', 'action' => 'view', $voucher->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row" class="col-lg-4"><?= __('Date') ?></th>
            <td><?= h($voucher->date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($voucher->products)): ?>
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
                <?php foreach ($voucher->products as $product): ?>
                    <tr>
                        <td><?= $this->Number->format($product->id) ?></td>
                        <td><?= h($product->name) ?></td>
                        <td><?= h($product->min_quantity) ?></td>
                        <td><?= h($product->unit_price) ?></td>
                        <td><?= h($product->quantity) ?></td>
                        <td class="actions">
                            <?= $this->Html->link($this->Html->tag('i',"",['class'=>'fa fa-folder']).__('Afficher'), ['action' => 'view', $product->id],['class'=>'btn btn-primary btn-xs ','escape'=>false]) ?>
                            <?= $this->Html->link($this->Html->tag('i',"",['class'=>'fa fa-pencil']).__('Modifier'), ['action' => 'edit', $product->id],['class'=>'btn btn-info btn-xs ','escape'=>false]) ?>
                            <?= $this->Form->postLink($this->Html->tag('i',"",['class'=>'fa fa-trash-o'])._('Supprimer'), ['action' => 'delete', $product->id],['class'=>'btn btn-danger btn-xs ','escape'=>false,'confirm' => __('Êtes vous sûr de vouloir supprimer {0} {1} ?', $product->first_name, $product->last_name)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>

<script src="<?= $webroot ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= $webroot ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= $webroot ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= $webroot ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?= $webroot ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= $webroot ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= $webroot ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= $webroot ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?= $webroot ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?= $webroot ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= $webroot ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?= $webroot ?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?= $webroot ?>vendors/jszip/dist/jszip.min.js"></script>
<script src="<?= $webroot ?>vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= $webroot ?>vendors/pdfmake/build/vfs_fonts.js"></script>
