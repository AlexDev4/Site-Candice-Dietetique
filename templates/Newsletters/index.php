<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter[]|\Cake\Collection\CollectionInterface $newsletters
 */
?>
<div class="newsletters index content">
    <?= $this->Html->link(__('New Newsletter'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Newsletters') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('mail') ?></th>
                    <th><?= $this->Paginator->sort('is_active') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($newsletters as $newsletter): ?>
                <tr>
                    <td><?= $this->Number->format($newsletter->id) ?></td>
                    <td><?= h($newsletter->mail) ?></td>
                    <td><?= h($newsletter->is_active) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $newsletter->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $newsletter->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $newsletter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsletter->id)]) ?>
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
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
