<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Analysis[]|\Cake\Collection\CollectionInterface $analyses
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('新規作成'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="analyses index large-10 medium-9 columns content">
    <h3><?= __('Analyses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('現在の年齢') ?></th>
                <th scope="col"><?= $this->Paginator->sort('退職予定年齢') ?></th>
                <th scope="col"><?= $this->Paginator->sort('寿命') ?></th>
                <th scope="col"><?= $this->Paginator->sort('老後生活費') ?></th>
                <th scope="col"><?= $this->Paginator->sort('パートナーの現在の年齢') ?></th>
                <th scope="col"><?= $this->Paginator->sort('パートナーの退職予定年齢') ?></th>
                <th scope="col"><?= $this->Paginator->sort('現在の年収') ?></th>
                <th scope="col"><?= $this->Paginator->sort('退職時想定年収') ?></th>
                <th scope="col"><?= $this->Paginator->sort('退職金') ?></th>
                <th scope="col"><?= $this->Paginator->sort('パートナーの現在の年収') ?></th>
                <th scope="col"><?= $this->Paginator->sort('パートナーの退職時想定年収') ?></th>
                <th scope="col"><?= $this->Paginator->sort('パートナーの退職金') ?></th>
                <th scope="col"><?= $this->Paginator->sort('現在の貯蓄') ?></th>
                <th scope="col"><?= $this->Paginator->sort('子供の人数') ?></th>
                <th scope="col"><?= $this->Paginator->sort('一人当たりの教育費') ?></th>
                <th scope="col"><?= $this->Paginator->sort('家のローン') ?></th>
                <th scope="col"><?= $this->Paginator->sort('年金減衰率(%)') ?></th>
                <th scope="col"><?= $this->Paginator->sort('手取り計算率(%)') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($analyses as $analysis): ?>
            <tr>
                <td><?= $this->Number->format($analysis->current_age) ?></td>
                <td><?= $this->Number->format($analysis->retirement_age) ?></td>
                <td><?= $this->Number->format($analysis->lifespan_age) ?></td>
                <td><?= $this->Number->format($analysis->living_expenses_for_old_age) ?></td>
                <td><?= $this->Number->format($analysis->current_age_of_partner) ?></td>
                <td><?= $this->Number->format($analysis->retirement_age_of_partner) ?></td>
                <td><?= $this->Number->format($analysis->current_salary) ?></td>
                <td><?= $this->Number->format($analysis->final_salary) ?></td>
                <td><?= $this->Number->format($analysis->severance_pay) ?></td>
                <td><?= $this->Number->format($analysis->current_salary_of_partner) ?></td>
                <td><?= $this->Number->format($analysis->final_salary_of_partner) ?></td>
                <td><?= $this->Number->format($analysis->severance_pay_of_partner) ?></td>
                <td><?= $this->Number->format($analysis->current_savings) ?></td>
                <td><?= $this->Number->format($analysis->number_of_children) ?></td>
                <td><?= $this->Number->format($analysis->children_support) ?></td>
                <td><?= $this->Number->format($analysis->housing_loan) ?></td>
                <td><?= $this->Number->format($analysis->pension_decay_rate) ?></td>
                <td><?= $this->Number->format($analysis->take_home_calculation_rate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('詳細'), ['action' => 'view', $analysis->id]) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $analysis->id]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $analysis->id], ['confirm' => __('本当に削除しますか # {0}?', $analysis->id)]) ?>
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
