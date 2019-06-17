<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Modifier un employé
                </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <?php echo $this->Form->create($employee,['class' => 'form-horizontal form-label-left']); ?>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First
                        Name <span class="required">*</span>
                    </label>
                    <div class="input-group col-md-6 col-sm-6 col-xs-12">
                        <?php echo $this->Form->input('first_name',[
                            'type' => 'text',
                            'class' => 'form-control col-md-7 col-xs-12',
                            'label' => '',
                            'required' => true,
                            'allowEmpty' => false
                        ]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last
                        Name <span class="required">*</span>
                    </label>
                    <div class="input-group col-md-6 col-sm-6 col-xs-12">
                        <?php echo $this->Form->input('last_name',[
                            'type' => 'text',
                            'class' => 'form-control col-md-7 col-xs-12',
                            'label' => '',
                            'required' => true,
                            'allowEmpty' => false
                        ]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Role">Last
                        Name <span class="required">*</span>
                    </label>
                    <div class="input-group col-md-6 col-sm-6 col-xs-12">
                        <?php echo $this->Form->input('role',[
                            'type' => 'text',
                            'class' => 'form-control col-md-7 col-xs-12',
                            'label' => '',
                            'required' => true,
                            'allowEmpty' => false
                        ]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hire date
                        <span class="required">*</span> </label>
                    <div class='input-group date col-md-6 col-sm-6 col-xs-12' id='myDatepicker1'>
                        <?php echo $this->Form->input('hire_date',[
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Birth date
                        <span class="required">*</span> </label>
                    <div class='input-group date col-md-6 col-sm-6 col-xs-12' id='myDatepicker2'>
                        <?php echo $this->Form->input('birth_date',[
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
    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    $('#myDatepicker1').datetimepicker({
        format: 'YYYY-MM-DD'
    });
</script>