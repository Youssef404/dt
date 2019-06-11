<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student[]|\Cake\Collection\CollectionInterface $students
 */
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <h3><?= __('Students') ?></h3>
    <div class="table-responsive">
        <table class="table jambo_table">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('establishment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tutor_first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tutor_last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tutor_job') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tutor_phone_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scolarship') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level') ?></th>
                <th scope="col"><?= $this->Paginator->sort('major_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= $this->Number->format($student->id) ?></td>
                    <td><?= h($student->first_name) ?></td>
                    <td><?= h($student->last_name) ?></td>
                    <td><?= h($student->phone_number) ?></td>
                    <td><?= $student->has('establishment') ? $this->Html->link($student->establishment->name, ['controller' => 'Establishments', 'action' => 'view', $student->establishment->id]) : '' ?></td>
                    <td><?= h($student->tutor_first_name) ?></td>
                    <td><?= h($student->tutor_last_name) ?></td>
                    <td><?= h($student->tutor_job) ?></td>
                    <td><?= h($student->tutor_phone_number) ?></td>
                    <td><?= h($student->scolarship) ?></td>
                    <td><?= h($student->level) ?></td>
                    <td><?= $student->has('major') ? $this->Html->link($student->major->id, ['controller' => 'Majors', 'action' => 'view', $student->major->id]) : '' ?></td>
                    <td><?= h($student->photo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('List'), ['action' => 'list', $student->id]) ?>
                        <?= $this->Html->link(__('View'), ['action' => 'view', $student->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $student->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
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
