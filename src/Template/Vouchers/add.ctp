<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voucher $voucher
 */
$this->assign('title','Ajout de bon')
?>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <br/>
                <?php echo $this->Form->create($voucher,['class' => 'form-horizontal form-label-left']); ?>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Type
                        <span class="required">*</span></label>
                    <div class="radio">
                        <?php echo $this->Form->radio('type',[
                                __('Entrée'),
                                __('Sortie')
                            ]
                            ,[
                                'label' => '',
                                'required' => true,
                                'allowEmpty' => false,
                                'class'=>'flat'
                        ]); ?>
                    </div>
                </div>



                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <?php echo $this->Form->button('Suivant',[
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
