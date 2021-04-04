<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Analysis $analysis
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('登録一覧'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="analyses form large-10 medium-9 columns content">
    <?= $this->Form->create($analysis) ?>
    <fieldset>
        <legend><?= __('Add Analysis') ?></legend>
        <?php
            echo $this->Form->control('current_age', ['label' => '現在の年齢']);
            echo $this->Form->control('retirement_age', ['label' => '退職予定年齢']);
            echo $this->Form->control('lifespan_age', ['label' => '寿命']);
            echo $this->Form->control('living_expenses_for_old_age', ['label' => '老後生活費']);
            echo $this->Form->control('current_age_of_partner', ['label' => 'パートナーの現在の年齢']);
            echo $this->Form->control('retirement_age_of_partner', ['label' => 'パートナーの退職予定年齢']);
            echo $this->Form->control('current_salary', ['label' => '現在の年収']);
            echo $this->Form->control('final_salary', ['label' => '退職時想定年収']);
            echo $this->Form->control('severance_pay', ['label' => '退職金']);
            // echo $this->Form->control('bonus', ['label' => '年間ボーナス（ヶ月）']);
            echo $this->Form->control('current_salary_of_partner', ['label' => 'パートナーの現在の年収']);
            echo $this->Form->control('final_salary_of_partner', ['label' => 'パートナーの退職時想定年収']);
            echo $this->Form->control('severance_pay_of_partner', ['label' => 'パートナーの退職金']);
            // echo $this->Form->control('bonus_of_partner', ['label' => 'パートナーの年間ボーナス（ヶ月）']);
            echo $this->Form->control('current_savings', ['label' => '現在の貯蓄']);
            echo $this->Form->control('number_of_children', ['label' => '子供の人数']);
            echo $this->Form->control('children_support', ['label' => '一人当たりの教育費']);
            echo $this->Form->control('housing_loan', ['label' => '家のローン']);
            echo $this->Form->control('pension_decay_rate', ['label' => '年金減衰率']);
            echo $this->Form->control('take_home_calculation_rate', ['label' => '手取り計算率']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
