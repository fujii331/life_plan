<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Analysis $analysis
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('編集'), ['action' => 'edit', $analysis->id]) ?> </li>
        <li><?= $this->Form->postLink(__('データ削除'), ['action' => 'delete', $analysis->id], ['confirm' => __('本当に削除しますか # {0}?', $analysis->id)]) ?> </li>
        <li><?= $this->Html->link(__('登録一覧'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('新規作成'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="analyses view large-10 medium-9 columns content">
    <h3>データ番号<?= h($analysis->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('現在の年齢') ?></th>
            <td><?= $this->Number->format($analysis->current_age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('退職予定年齢') ?></th>
            <td><?= $this->Number->format($analysis->retirement_age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('寿命') ?></th>
            <td><?= $this->Number->format($analysis->lifespan_age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('老後生活費') ?></th>
            <td><?= $this->Number->format($analysis->living_expenses_for_old_age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('パートナーの現在の年齢') ?></th>
            <td><?= $this->Number->format($analysis->current_age_of_partner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('パートナーの退職予定年齢') ?></th>
            <td><?= $this->Number->format($analysis->retirement_age_of_partner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('現在の年収') ?></th>
            <td><?= $this->Number->format($analysis->current_salary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('退職時の想定年収') ?></th>
            <td><?= $this->Number->format($analysis->final_salary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('退職金') ?></th>
            <td><?= $this->Number->format($analysis->severance_pay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('パートナーの現在の年収') ?></th>
            <td><?= $this->Number->format($analysis->current_salary_of_partner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('パートナーの退職時の想定年収') ?></th>
            <td><?= $this->Number->format($analysis->final_salary_of_partner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('パートナーの退職金') ?></th>
            <td><?= $this->Number->format($analysis->severance_pay_of_partner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('現在の貯蓄') ?></th>
            <td><?= $this->Number->format($analysis->current_savings) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('子供の人数') ?></th>
            <td><?= $this->Number->format($analysis->number_of_children) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('子供一人当たりの想定教育費') ?></th>
            <td><?= $this->Number->format($analysis->children_support) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('家のローン') ?></th>
            <td><?= $this->Number->format($analysis->housing_loan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('年金減衰率(%)') ?></th>
            <td><?= $this->Number->format($analysis->pension_decay_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('手取り計算率(%)') ?></th>
            <td><?= $this->Number->format($analysis->take_home_calculation_rate) ?></td>
        </tr>
    </table>
    <p>老後に必要なお金：<?= $this->Number->format($old_age_money) ?>円</p>
    <p>老後に必要なお金 + 教育費：<?= $this->Number->format($need_money) ?>円</p>
    <p>老後に必要なお金 + 教育費 - 2人の退職金 - 現在の貯蓄：<?= $this->Number->format($must_saving_amount) ?>円</p>
    <p>毎月貯金すべき金額：<?= $this->Number->format($monthly_savings_amount) ?>円</p>
</div>
