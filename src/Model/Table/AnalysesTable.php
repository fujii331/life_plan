<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Analyses Model
 *
 * @method \App\Model\Entity\Analysis get($primaryKey, $options = [])
 * @method \App\Model\Entity\Analysis newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Analysis[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Analysis|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Analysis saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Analysis patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Analysis[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Analysis findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AnalysesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('analyses');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('current_age')
            ->notEmptyString('current_age', '入力必須項目です。');

        $validator
            ->integer('retirement_age')
            ->notEmptyString('retirement_age', '入力必須項目です。');

        $validator
            ->integer('lifespan_age')
            ->notEmptyString('lifespan_age', '入力必須項目です。')
            ->greaterThan('lifespan_age', 65, '65歳より大きい値でお願いします。');

        $validator
            ->integer('living_expenses_for_old_age')
            ->notEmptyString('living_expenses_for_old_age', '入力必須項目です。');

        $validator
            ->integer('current_age_of_partner')
            ->allowEmptyString('current_age_of_partner');

        $validator
            ->integer('retirement_age_of_partner')
            ->allowEmptyString('retirement_age_of_partner');

        $validator
            ->integer('current_salary')
            ->notEmptyString('current_salary', '入力必須項目です。');

        $validator
            ->integer('final_salary')
            ->notEmptyString('final_salary', '入力必須項目です。');

        $validator
            ->integer('severance_pay')
            ->allowEmptyString('severance_pay');

        $validator
            ->numeric('bonus')
            ->allowEmptyString('bonus');

        $validator
            ->integer('current_salary_of_partner')
            ->allowEmptyString('current_salary_of_partner');

        $validator
            ->integer('final_salary_of_partner')
            ->allowEmptyString('final_salary_of_partner');

        $validator
            ->integer('severance_pay_of_partner')
            ->allowEmptyString('severance_pay_of_partner');

        $validator
            ->numeric('bonus_of_partner')
            ->allowEmptyString('bonus_of_partner');

        $validator
            ->integer('current_savings')
            ->allowEmptyString('current_savings');

        $validator
            ->integer('number_of_children')
            ->allowEmptyString('number_of_children');

        $validator
            ->integer('children_support')
            ->allowEmptyString('children_support');

        $validator
            ->integer('housing_loan')
            ->allowEmptyString('housing_loan');

        $validator
            ->integer('pension_decay_rate')
            ->notEmptyString('pension_decay_rate', '入力必須項目です。');
        
        $validator
            ->integer('take_home_calculation_rate')
            ->notEmptyString('take_home_calculation_rate', '入力必須項目です。');
        return $validator;
    }
}
