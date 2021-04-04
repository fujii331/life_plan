<?php
use Migrations\AbstractMigration;

class CreateAnalyses extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('analyses');
        $table->addColumn('current_age', 'integer', [
                'default' => 28,
                'limit' => 3,
                'null' => false,
            ])
            ->addColumn('retirement_age', 'integer', [
                'default' => 65,
                'limit' => 3,
                'null' => false,
            ])
            ->addColumn('lifespan_age', 'integer', [
                'default' => 80,
                'limit' => 3,
                'null' => false,
            ])
            ->addColumn('living_expenses_for_old_age', 'integer', [
                'default' => 320000,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('current_age_of_partner', 'integer', [
                'default' => 27,
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('retirement_age_of_partner', 'integer', [
                'default' => 32,
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('current_salary', 'integer', [
                'default' => 4000000,
                'limit' => 15,
                'null' => false,
            ])
            ->addColumn('final_salary', 'integer', [
                'default' => 7000000,
                'limit' => 15,
                'null' => false,
            ])
            ->addColumn('severance_pay', 'integer', [
                'default' => 0,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('bonus', 'float', [
                'default' => 2,
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('current_salary_of_partner', 'integer', [
                'default' => 2200000,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('final_salary_of_partner', 'integer', [
                'default' => 2300000,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('severance_pay_of_partner', 'integer', [
                'default' => 0,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('bonus_of_partner', 'float', [
                'default' => 0,
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('current_savings', 'integer', [
                'default' => 2000000,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('number_of_children', 'integer', [
                'default' => 2,
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('children_support', 'integer', [
                'default' => 10000000,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('housing_loan', 'integer', [
                'default' => 40000000,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('pension_decay_rate', 'integer', [
                'default' => 70,
                'limit' => 3,
                'null' => false,
            ])
            ->addColumn('take_home_calculation_rate', 'integer', [
                'default' => 75,
                'limit' => 3,
                'null' => false,
            ])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
