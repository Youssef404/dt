<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
?>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_content">
            <table class="table table-striped table-bordered" id="datatable-button">
                <thead>
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Prenom') ?></th>
                    <th scope="col"><?= __('Nom') ?></th>
                    <th scope="col"><?= __('Date de naissance') ?></th>
                    <th scope="col"><?= __('Date de recrutement') ?></th>
                    <th scope="col"><?= __('Role') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($employees as $employee): ?>
                    <tr>
                        <td><?= $this->Number->format($employee->id) ?></td>
                        <td><?= h($employee->first_name) ?></td>
                        <td><?= h($employee->last_name) ?></td>
                        <td><?= h($employee->birth_date->format('d/m/Y')) ?></td>
                        <td><?= h($employee->hire_date->format('d/m/Y')) ?></td>
                        <td><?= h($employee->role) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Afficher'), ['action' => 'view', $employee->id],['class'=>'btn btn-primary']) ?>
                            <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $employee->id],['class'=>'btn btn-primary']) ?>
                            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $employee->id], ['confirm' => __('Êtes vous sûr de vouloir supprimer {0} {1} ?', $employee->first_name,$employee->last_name),'class'=>'btn btn-danger']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<script src="<?=$webroot?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=$webroot?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?=$webroot?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=$webroot?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?=$webroot?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?=$webroot?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?=$webroot?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?=$webroot?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?=$webroot?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?=$webroot?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=$webroot?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?=$webroot?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?=$webroot?>vendors/jszip/dist/jszip.min.js"></script>
<script src="<?=$webroot?>vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?=$webroot?>vendors/pdfmake/build/vfs_fonts.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable-button').dataTable( {
            "language": {
                "url": "<?= $webroot ?>localization/French.lang"
            },
            buttons: [
                {
                    extend :'copy',
                    text: 'Copier',
                    exportOptions:{
                        columns:'th:not(:last-child)'
                    }
                }
                ,{
                    extend: 'excel',
                    text: 'Excel',
                    exportOptions:{
                        columns:'th:not(:last-child)'
                    }
                }
                ,{
                    extend: 'pdf',
                    text: 'PDF',
                    exportOptions:{
                        columns:'th:not(:last-child)'
                    }
                }
            ],
            dom : "lBfrtip",

        } );
    } );
</script>