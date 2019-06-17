<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="employees view large-9 medium-8 columns content">
    <h3>Id : <?= h($employee->id) ?></h3>
    <table class="vertical-table table">
        <tr>
            <th scope="row" class="col-lg-4"><?= __('First Name') ?></th>
            <td><?= h($employee->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row" class="col-lg-4"><?= __('Last Name') ?></th>
            <td><?= h($employee->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row" class="col-lg-4"><?= __('Role') ?></th>
            <td><?= h($employee->role) ?></td>
        </tr>
        <tr>
            <th scope="row" class="col-lg-4"><?= __('Birth Date') ?></th>
            <td><?= h($employee->birth_date) ?></td>
        </tr>
        <tr>
            <th scope="row" class="col-lg-4"><?= __('Hire Date') ?></th>
            <td><?= h($employee->hire_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Vouchers') ?></h4>
        <?php if (!empty($employee->vouchers)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Date') ?></th>
                    <th scope="col"><?= __('Employee Id') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($employee->vouchers as $vouchers): ?>
                    <tr>
                        <td><?= h($vouchers->id) ?></td>
                        <td><?= h($vouchers->date) ?></td>
                        <td><?= h($vouchers->employee_id) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Vouchers', 'action' => 'view', $vouchers->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Vouchers', 'action' => 'edit', $vouchers->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vouchers', 'action' => 'delete', $vouchers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vouchers->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
