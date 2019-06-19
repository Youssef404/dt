<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsVoucher $productsVoucher
 */
$this->assign('title', 'Détails de bon')
?>


<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <?= $this->Flash->render() ?>
        <div class="x_content">
            <?php echo $this->Form->create($productsVoucher, ['class' => 'form-horizontal form-label-left']); ?>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Produit <span
                            class="required">*</span>
                </label>
                <div class="input-group col-md-6 col-sm-6 col-xs-12">
                    <?php echo $this->Form->control('product_id', [
                            'type'=>'select',
                            'options'=>$products,
                        'class' => 'form-control',
                        'label' => '',
                        'required' => true,
                        'allowEmpty' => false
                    ]); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Quantité <span
                            class="required">*</span>
                </label>
                <div class="input-group col-md-6 col-sm-6 col-xs-12">
                    <?php echo $this->Form->control('quantity', [
                        'class' => 'form-control col-md-7 col-xs-12',
                        'label' => '',
                        'required' => true,
                        'allowEmpty' => false
                    ]); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Prix unitaire<span
                            class="required">*</span>
                </label>
                <div class="input-group col-md-6 col-sm-6 col-xs-12">
                    <?php echo $this->Form->control('unit_price', [
                        'class' => 'form-control col-md-7 col-xs-12',
                        'label' => '',
                        'required' => true,
                        'allowEmpty' => false
                    ]); ?>
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <?php echo $this->Form->button('Ajouter un autre', [
                        'type' => 'submit',
                        'class' => 'btn btn-success',
                        'name' => 'btn',
                    ]); ?>

                    <?php echo $this->Form->button('Terminer', [
                        'type' => 'submit',
                        'class' => 'btn btn-success',
                        'name' => 'btn',
                    ]); ?>
                </div>
            </div>

            <?= $this->Form->end() ?>
        </div>



    </div>
</div>
