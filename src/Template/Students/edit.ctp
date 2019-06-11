<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">

        <div class="x_content">


            <!-- Smart Wizard -->
            <?= $this->Form->create($student, ['type' => 'file']) ?>
            <div id="wizard" class="form_wizard wizard_horizontal">
                <ul class="wizard_steps">
                    <li>
                        <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Etudient<br/>
                                              <small>A propos d'etudient</small>
                                          </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                               Tuteur<br/>
                                              <small>A propos du tuteur</small>
                                          </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                             Etablissement<br/>
                                              <small>A propos d'etablissment</small>
                                          </span>
                        </a>
                    </li>

                </ul>

                <div id="step-1">


                    <div class="form-horizontal form-label-left">
                        <div class="form-group">
                            <?= $this->Form->label('first_name', null, ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('first_name', ['class' => 'form-control col-md-7 col-xs-12', 'label' => false]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->label('last_name', null, ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('last_name', ['class' => 'form-control col-md-7 col-xs-12', 'label' => false]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->label('phone_number', null, ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('phone_number', ['class' => 'form-control col-md-7 col-xs-12', 'label' => false]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->label('photo', null, ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('photo', ['class' => 'form-control col-md-7 col-xs-12', 'label' => false, 'type' => 'file']); ?>
                            </div>
                        </div>

                    </div>


                </div>
                <div id="step-2">


                    <div class="form-horizontal form-label-left">
                        <div class="form-group">
                            <?= $this->Form->label('tutor_first_name', null, ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('tutor_first_name', ['class' => 'form-control col-md-7 col-xs-12', 'label' => false]); ?>
                            </div>

                        </div>
                        <div class="form-group">
                            <?= $this->Form->label('tutor_last_name', null, ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('tutor_last_name', ['class' => 'form-control col-md-7 col-xs-12', 'label' => false]); ?>
                            </div>

                        </div>
                        <div class="form-group">
                            <?= $this->Form->label('tutor_job', null, ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('tutor_job', ['class' => 'form-control col-md-7 col-xs-12', 'label' => false]); ?>
                            </div>

                        </div>
                        <div class="form-group">
                            <?= $this->Form->label('tutor_phone_number', null, ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('tutor_phone_number', ['class' => 'form-control col-md-7 col-xs-12', 'label' => false]); ?>
                            </div>

                        </div>
                    </div>
                </div>


                <div id="step-3">


                    <div class="form-horizontal form-label-left">
                        <div class="form-group">
                            <?= $this->Form->label('establishment_id', null, ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('establishment_id', ['class' => 'form-control col-md-7 col-xs-12', 'label' => false]); ?>
                            </div>

                        </div>
                        <div class="form-group">
                            <?= $this->Form->label('scolarship', null, ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('scolarship', ['class' => 'form-control col-md-7 col-xs-12', 'label' => false]); ?>
                            </div>

                        </div>
                        <div class="form-group">
                            <?= $this->Form->label('level', null, ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('level', ['class' => 'form-control col-md-7 col-xs-12', 'label' => false]); ?>
                            </div>

                        </div>
                        <div class="form-group">
                            <?= $this->Form->label('major_id', null, ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('major_id', ['class' => 'form-control col-md-7 col-xs-12', 'label' => false]); ?>
                            </div>

                        </div>
                    </div>
                </div>


            </div>


        </div>
        <?= $this->Form->end() ?>
        <!-- End SmartWizard Content -->
    </div>
</div>
</div>


<!-- NProgress -->
<script src="<?= $webroot ?>vendors/nprogress/nprogress.js"></script>
<!-- jQuery Smart Wizard -->
<script src="<?= $webroot ?>vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
