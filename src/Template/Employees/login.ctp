
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <?= $this->Form->create() ?>
                    <h1>Se connecter</h1>
                    <div>
                        <?= $this->Form->control('email',['class'=>'form-control','placeholder'=>'Email','required'=>true,'label'=>false]) ?>
                    </div>
                    <div>
                        <?= $this->Form->control('password',['class'=>'form-control','placeholder'=>'Mot de passe','required'=>true,'label'=>false]) ?>

                    </div>
                    <div>
                        <?= $this->Form->button('Se connecter',['class'=>'btn btn-default submit'])?>
                        <!--<a class="reset_pass" href="#">Lost your password?</a>-->
                    </div>

                    <div class="clearfix"></div>

                    <!--<div class="separator">
                        <p class="change_link">New to site?
                            <a href="#signup" class="to_register"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br/>

                    </div>-->
                <?= $this->Form->end() ?>
            </section>
        </div>
    </div>
</div>