<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsVouchers Controller
 *
 * @property \App\Model\Table\ProductsVouchersTable $ProductsVouchers
 *
 * @method \App\Model\Entity\ProductsVoucher[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsVouchersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Vouchers']
        ];
        $productsVouchers = $this->paginate($this->ProductsVouchers);

        $this->set(compact('productsVouchers'));
    }

    /**
     * View method
     *
     * @param string|null $id Products Voucher id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsVoucher = $this->ProductsVouchers->get($id, [
            'contain' => ['Products', 'Vouchers']
        ]);

        $this->set('productsVoucher', $productsVoucher);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($voucher)
    {
        $productsVoucher = $this->ProductsVouchers->newEntity();
        if ($this->request->is('post')) {
            $productsVoucher = $this->ProductsVouchers->patchEntity($productsVoucher, $this->request->getData());
            $productsVoucher->voucher_id = $voucher;
            $productsVoucher->product_id = $this->request->getData('product_id');
            if ($this->ProductsVouchers->save($productsVoucher)) {
                $this->Flash->success(__('The products voucher has been saved.'));
                if($this->request->getData('btn')=='autre')
                {
                    return $this->redirect(['action'=>'add',$voucher]);
                }
                else{
                    return $this->redirect(['action' => 'index']);
                }

            }
            $this->Flash->error(__('Le bon n\'a pas pu être sauvegardé'));
        }
        $voucher = $this->ProductsVouchers->Vouchers->get($voucher);
        $products = $this->ProductsVouchers->Products->find('list', ['limit' => 200]);
        $vouchers = $this->ProductsVouchers->Vouchers->find('list', ['limit' => 200]);
        $this->set(compact('productsVoucher', 'products', 'vouchers','voucher'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Voucher id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsVoucher = $this->ProductsVouchers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsVoucher = $this->ProductsVouchers->patchEntity($productsVoucher, $this->request->getData());
            if ($this->ProductsVouchers->save($productsVoucher)) {
                $this->Flash->success(__('The products voucher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products voucher could not be saved. Please, try again.'));
        }
        $products = $this->ProductsVouchers->Products->find('list', ['limit' => 200]);
        $vouchers = $this->ProductsVouchers->Vouchers->find('list', ['limit' => 200]);
        $this->set(compact('productsVoucher', 'products', 'vouchers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Voucher id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsVoucher = $this->ProductsVouchers->get($id);
        if ($this->ProductsVouchers->delete($productsVoucher)) {
            $this->Flash->success(__('The products voucher has been deleted.'));
        } else {
            $this->Flash->error(__('The products voucher could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
