<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>

<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Ajouter un employé
                </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <?php echo $this->Form->create($supplier, ['class' => 'form-horizontal form-label-left']); ?>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                        Name <span class="required">*</span>
                    </label>
                    <div class="input-group col-md-6 col-sm-6 col-xs-12">
                        <?php echo $this->Form->input('name', [
                            'type' => 'text',
                            'class' => 'form-control col-md-7 col-xs-12',
                            'label' => '',
                            'required' => true,
                            'allowEmpty' => false
                        ]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <?php echo $this->Form->button('Reset', [
                                'type' => 'reset',
                                'class' => 'btn btn-primary'
                            ]); ?>
                            <?php echo $this->Form->button('Submit', [
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
