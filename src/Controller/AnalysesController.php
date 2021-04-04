<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Analyses Controller
 *
 * @property \App\Model\Table\AnalysesTable $Analyses
 *
 * @method \App\Model\Entity\Analysis[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnalysesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $analyses = $this->paginate($this->Analyses);

        $this->set(compact('analyses'));
    }

    /**
     * View method
     *
     * @param string|null $id Analysis id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $analysis = $this->Analyses->get($id, [
            'contain' => [],
        ]);

        $estimated_pension = 62000 + ($analysis->current_salary + $analysis->final_salary) / 2 * (40 - (65 -  $analysis->retirement_age)) / 40 / 60;
        $estimated_pension_of_partner = 62000 + ($analysis->current_salary_of_partner + $analysis->final_salary_of_partner) / 2 * (40 - (65 -  $analysis->retirement_age_of_partner)) / 40 / 60;

        $old_age_money = ($analysis->living_expenses_for_old_age - $estimated_pension * $analysis->pension_decay_rate / 100 - $estimated_pension_of_partner * $analysis->pension_decay_rate / 100) * ($analysis->lifespan_age - 65) * 12;
        $children_support_money = $analysis->children_support * $analysis->number_of_children;
        $need_money = $old_age_money + $children_support_money;

        $must_saving_amount = $need_money - $analysis->severance_pay - $analysis->severance_pay_of_partner - $analysis->current_savings;
        $monthly_savings_amount = round($must_saving_amount / (65 - $analysis->current_age) / 12);



        $this->set('analysis', $analysis);
        $this->set('old_age_money', $old_age_money);
        $this->set('need_money', $need_money);
        $this->set('must_saving_amount', $must_saving_amount);
        $this->set('monthly_savings_amount', $monthly_savings_amount);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $analysis = $this->Analyses->newEntity();
        if ($this->request->is('post')) {
            $analysis = $this->Analyses->patchEntity($analysis, $this->request->getData());
            if ($this->Analyses->save($analysis)) {
                $this->Flash->success(__('正常に登録しました。'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('登録に失敗しました。もう一度お試し下さい。'));
        }
        $this->set(compact('analysis'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Analysis id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $analysis = $this->Analyses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $analysis = $this->Analyses->patchEntity($analysis, $this->request->getData());
            if ($this->Analyses->save($analysis)) {
                $this->Flash->success(__('正常に登録しました。'));

                return $this->redirect(['action' => 'view', $analysis->id]);
            }
            $this->Flash->error(__('登録に失敗しました。もう一度お試し下さい。'));
        }
        $this->set(compact('analysis'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Analysis id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $analysis = $this->Analyses->get($id);
        if ($this->Analyses->delete($analysis)) {
            $this->Flash->success(__('The analysis has been deleted.'));
        } else {
            $this->Flash->error(__('The analysis could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
