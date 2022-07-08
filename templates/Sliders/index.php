<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slider[]|\Cake\Collection\CollectionInterface $sliders
 */
?>
<div class="sliders index content">
    <?= $this->Html->link(__('New Slider'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sliders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('src') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sliders as $slider): ?>
                <tr>
                    <td><?= $this->Number->format($slider->id) ?></td>
                    <td><?= h($slider->src) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $slider->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $slider->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $slider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slider->id)]) ?>
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
