<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row" class="col-lg-4"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row" class="col-lg-4"><?= __('Min Quantity') ?></th>
            <td><?= $this->Number->format($product->min_quantity) ?></td>
        </tr>
        <tr>
            <th scope="row" class="col-lg-4"><?= __('Unit Price') ?></th>
            <td><?= $this->Number->format($product->unit_price) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Suppliers') ?></h4>
        <?php if (!empty($product->suppliers)): ?>
            <table class="table table-striped table-bordered" id="datatable-button">
                <thead>
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Nom') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($product->suppliers as $suppliers): ?>
                    <tr>
                        <td><?= $this->Number->format($suppliers->id) ?></td>
                        <td><?= h($suppliers->name) ?></td>
                        <td class="actions">
                            <?= $this->Html->link($this->Html->tag('i',"",['class'=>'fa fa-folder']).__('Afficher'), ['controller'=>'Suppliers','action' => 'view', $suppliers->id],['class'=>'btn btn-primary btn-xs ','escape'=>false]) ?>
                            <?= $this->Html->link($this->Html->tag('i',"",['class'=>'fa fa-pencil']).__('Modifier'), ['controller'=>'Suppliers','action' => 'edit', $suppliers->id],['class'=>'btn btn-info btn-xs ','escape'=>false]) ?>
                            </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Vouchers') ?></h4>
        <?php if (!empty($product->vouchers)): ?>
            <table class="table table-striped table-bordered" id="datatable-button">
                <thead>
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Date') ?></th>
                    <th scope="col"><?= __('Id employee') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($product->vouchers as $voucher): ?>
                    <tr>
                        <td><?= $this->Number->format($voucher->id) ?></td>
                        <td><?= h($voucher->date->format('d/m/Y')) ?></td>
                        <td><?= h($voucher->employee_id) ?></td>
                        <td class="actions">
                            <?= $this->Html->link($this->Html->tag('i',"",['class'=>'fa fa-folder']).__('Afficher'), ['controller'=>'Vouchers','action' => 'view', $voucher->id],['class'=>'btn btn-primary btn-xs ','escape'=>false]) ?>
                            <?= $this->Html->link($this->Html->tag('i',"",['class'=>'fa fa-pencil']).__('Modifier'), ['controller'=>'Vouchers','action' => 'edit', $voucher->id],['class'=>'btn btn-info btn-xs ','escape'=>false]) ?>
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