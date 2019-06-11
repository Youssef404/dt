<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Vouchers Controller
 *
 * @property \App\Model\Table\VouchersTable $Vouchers
 *
 * @method \App\Model\Entity\Voucher[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VouchersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees']
        ];
        $vouchers = $this->paginate($this->Vouchers);

        $this->set(compact('vouchers'));
    }

    /**
     * View method
     *
     * @param string|null $id Voucher id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $voucher = $this->Vouchers->get($id, [
            'contain' => ['Employees', 'Products']
        ]);

        $this->set('voucher', $voucher);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $voucher = $this->Vouchers->newEntity();
        if ($this->request->is('post')) {
            $voucher = $this->Vouchers->patchEntity($voucher, $this->request->getData());
            if ($this->Vouchers->save($voucher)) {
                $this->Flash->success(__('The voucher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The voucher could not be saved. Please, try again.'));
        }
        $employees = $this->Vouchers->Employees->find('list', ['limit' => 200]);
        $products = $this->Vouchers->Products->find('list', ['limit' => 200]);
        $this->set(compact('voucher', 'employees', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Voucher id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $voucher = $this->Vouchers->get($id, [
            'contain' => ['Products']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $voucher = $this->Vouchers->patchEntity($voucher, $this->request->getData());
            if ($this->Vouchers->save($voucher)) {
                $this->Flash->success(__('The voucher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The voucher could not be saved. Please, try again.'));
        }
        $employees = $this->Vouchers->Employees->find('list', ['limit' => 200]);
        $products = $this->Vouchers->Products->find('list', ['limit' => 200]);
        $this->set(compact('voucher', 'employees', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Voucher id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $voucher = $this->Vouchers->get($id);
        if ($this->Vouchers->delete($voucher)) {
            $this->Flash->success(__('The voucher has been deleted.'));
        } else {
            $this->Flash->error(__('The voucher could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
