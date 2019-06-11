<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voucher[]|\Cake\Collection\CollectionInterface $vouchers
 */
?>

<div class="vouchers index large-9 medium-8 columns content">
    <h3><?= __('Vouchers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('date') ?></th>
            <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($vouchers as $voucher): ?>
            <tr>
                <td><?= $this->Number->format($voucher->id) ?></td>
                <td><?= h($voucher->date) ?></td>
                <td><?= $voucher->has('employee') ? $this->Html->link($voucher->employee->id, ['controller' => 'Employees', 'action' => 'view', $voucher->employee->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $voucher->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $voucher->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $voucher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voucher->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
