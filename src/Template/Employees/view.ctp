<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vouchers'), ['controller' => 'Vouchers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Voucher'), ['controller' => 'Vouchers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employees view large-9 medium-8 columns content">
    <h3><?= h($employee->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($employee->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($employee->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($employee->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Date') ?></th>
            <td><?= h($employee->birth_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hire Date') ?></th>
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
