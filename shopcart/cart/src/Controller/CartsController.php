<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Carts Controller
 *
 * @property \App\Model\Table\CartsTable $Carts
 */
class CartsController extends AppController
{

    public function index()
    {

    }
    public function view()
    {
        $carts = $this->Carts->readProduct();
        $products = array();
        if (null != $carts) {
            foreach ($carts as $productId => $count) {
                $product = $this->Products->read(null, $productId);
                $product['Product']['count'] = $count;
                $products[] = $product;
            }
        }
        $this->set(compact('products'));
    }



    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->autoRender = false;

        $cart = $this->Carts->newEntity();
        if ($this->request->is('post')) {
            $cart = $this->Carts->patchEntity($cart, $this->request->data);
        }
        echo $this->Carts->getCount();
    }


    public function update()
    {
        if ($this->request->is('post')) {
            if (!empty($this->request->data)) {
                $cart = array();
                foreach ($this->request->data['Carts']['count'] as $index => $count) {
                    if ($count > 0) {
                        $productId = $this->request->data['Carts']['product_id'][$index];
                        $cart[$productId] = $count;
                    }
                }
                $this->Carts->saveProduct($cart);
            }
        }
        $this->redirect(array('action' => 'view'));
    }

}