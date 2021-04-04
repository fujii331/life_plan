<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AnalysesFixture
 */
class AnalysesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'current_age' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => '18', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'retirement_age' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => '18', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lifespan_age' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => '80', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'living_expenses_for_old_age' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => '320000', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'current_age_of_partner' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'retirement_age_of_partner' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'current_salary' => ['type' => 'integer', 'length' => 15, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'final_salary' => ['type' => 'integer', 'length' => 15, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'severance_pay' => ['type' => 'integer', 'length' => 15, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'bonus' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => ''],
        'current_salary_of_partner' => ['type' => 'integer', 'length' => 15, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'final_salary_of_partner' => ['type' => 'integer', 'length' => 15, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'severance_pay_of_partner' => ['type' => 'integer', 'length' => 15, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'current_savings' => ['type' => 'integer', 'length' => 15, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'number_of_children' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'children_support' => ['type' => 'integer', 'length' => 15, 'unsigned' => false, 'null' => true, 'default' => '10000000', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'housing_loan' => ['type' => 'integer', 'length' => 15, 'unsigned' => false, 'null' => true, 'default' => '40000000', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'current_age' => 1,
                'retirement_age' => 1,
                'lifespan_age' => 1,
                'living_expenses_for_old_age' => 1,
                'current_age_of_partner' => 1,
                'retirement_age_of_partner' => 1,
                'current_salary' => 1,
                'final_salary' => 1,
                'severance_pay' => 1,
                'bonus' => 1,
                'current_salary_of_partner' => 1,
                'final_salary_of_partner' => 1,
                'severance_pay_of_partner' => 1,
                'current_savings' => 1,
                'number_of_children' => 1,
                'children_support' => 1,
                'housing_loan' => 1,
                'created' => '2021-04-04 04:41:46',
                'modified' => '2021-04-04 04:41:46',
            ],
        ];
        parent::init();
    }
}
