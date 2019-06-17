<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voucher $voucher
 */
?>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add voucher
                </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <?php echo $this->Form->create($voucher,['class' => 'form-horizontal form-label-left']); ?>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date
                        <span class="required">*</span> </label>
                    <div class='input-group date col-md-6 col-sm-6 col-xs-12' id='myDatepicker1'>
                        <?php echo $this->Form->control('date', [
                            'type' => 'text',
                            'class' => 'form-control',
                            'label' => '',
                            'required' => true,
                            'allowEmpty' => false
                        ]); ?>
                        <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee id
                        <span class="required">*</span></label>
                    <div class="input-group col-md-6 col-sm-6 col-xs-12">
                        <?php echo $this->Form->control('employee._id',[
                            'options' => $employees,
                            'class' => 'form-control',
                            'label' => '',
                            'required' => true,
                            'allowEmpty' => false
                        ]); ?>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <?php echo $this->Form->button('Reset',[
                            'type' => 'reset',
                            'class' => 'btn btn-primary'
                        ]); ?>
                        <?php echo $this->Form->button('Submit',[
                            'type' => 'submit',
                            'class' => 'btn btn-success'
                        ]); ?>
                    </div>
                </div>

                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
<script src="<?= $webroot ?>vendors/moment/min/moment.min.js"></script>
<script src="<?= $webroot ?>vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script>
    $('#myDatepicker1').datetimepicker({
        format: 'YYYY-MM-DD'
    });
</script>
