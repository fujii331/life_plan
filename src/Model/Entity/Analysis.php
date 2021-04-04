<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Analysis Entity
 *
 * @property int $id
 * @property int $current_age
 * @property int $retirement_age
 * @property int $lifespan_age
 * @property int $living_expenses_for_old_age
 * @property int|null $current_age_of_partner
 * @property int|null $retirement_age_of_partner
 * @property int $current_salary
 * @property int $final_salary
 * @property int|null $severance_pay
 * @property float $bonus
 * @property int|null $current_salary_of_partner
 * @property int|null $final_salary_of_partner
 * @property int|null $severance_pay_of_partner
 * @property int|null $current_savings
 * @property int|null $number_of_children
 * @property int|null $children_support
 * @property int|null $housing_loan
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Analysis extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'current_age' => true,
        'retirement_age' => true,
        'lifespan_age' => true,
        'living_expenses_for_old_age' => true,
        'current_age_of_partner' => true,
        'retirement_age_of_partner' => true,
        'current_salary' => true,
        'final_salary' => true,
        'severance_pay' => true,
        'bonus' => true,
        'current_salary_of_partner' => true,
        'final_salary_of_partner' => true,
        'severance_pay_of_partner' => true,
        'bonus_of_partner' => true,
        'current_savings' => true,
        'number_of_children' => true,
        'children_support' => true,
        'housing_loan' => true,
        'pension_decay_rate' => true,
        'take_home_calculation_rate' => true,
        'created' => true,
        'modified' => true,
    ];
}
