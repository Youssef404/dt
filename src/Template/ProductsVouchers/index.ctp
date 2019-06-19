<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsVoucher[]|\Cake\Collection\CollectionInterface $productsVouchers
 */
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_content">
    <table class="table table-striped table-bordered" id="datatable-button">
        <thead>
            <tr>
                <th scope="col"><?= __('Id de produit') ?></th>
                <th scope="col"><?= __('Id de bon') ?></th>
                <th scope="col"><?= __('Quantité') ?></th>
                <th scope="col"><?= __('Prix unitaire') ?></th>
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
</div>
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
<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable-button').dataTable({
            "language": {
                "url": "<?= $webroot ?>localization/French.lang"
            },
            buttons: [
                {
                    extend: 'copy',
                    text: 'Copier',
                    exportOptions: {
                        columns: 'th:not(:last-child)'
                    }
                }
                , {
                    extend: 'excel',
                    text: 'Excel',
                    exportOptions: {
                        columns: 'th:not(:last-child)'
                    }
                }
                , {
                    extend: 'pdf',
                    text: 'PDF',
                    exportOptions: {
                        columns: 'th:not(:last-child)'
                    }
                },
                {
                    extend: 'print',
                    text: 'Imprimer',
                    exportOptions: {
                        columns: 'th:not(:last-child)'
                    }
                }
            ],
            dom: "lBfrtip",

        });
    });
</script>
