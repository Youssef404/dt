<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="employees form large-9 medium-8 columns content">
    <?= $this->Form->create($employee) ?>
    <fieldset>
        <legend><?= __('Add Employee') ?></legend>
        <?php
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');


            echo $this->Form->control('role');
        ?>
        <!-- Date picker -->
        <div class="form-group">
            <div class='input-group date' id='myDatepicker1'>
                <?= $this->Form->control('hire_date', ['type' => 'text','class'=>'form-control']); ?>
                <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
            </div>
        </div>
        <!-- Date picker -->
        <div class="form-group">
            <div class='input-group date' id='myDatepicker2'>
                <?= $this->Form->control('birth_date', ['type' => 'true','class'=>'form-control']); ?>
                <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
            </div>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<!-- Les scripts !-->
<script src="<?=$webroot?>vendors/moment/min/moment.min.js"></script>
<script src="<?=$webroot?>vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script>
    $('#myDatepicker1').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD'
    });
</script>