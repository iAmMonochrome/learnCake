<?php
App::uses('AppController', 'Controller');
/**
 * Customers Controller
 *
 * @property Customer $Customer
 * @property PaginatorComponent $Paginator
 */
class CustomersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Customer->recursive = 0;
		// Include search method
		if ($this->request->is('post')) {
			$key = $this->request->data['Customers']['keyword'];
			$this->set('is_search', true);
			if($key == ''){
				$this->set('is_empty', true);	
				$this->set('customers', $this->Paginator->paginate());
			}else{
				$this->set('is_empty', false);
				$customer = $this->Customer->find('all',
					[
						// 'fields' => all,
						'contain' => ['Writer.Name', 'Writer.slug'],
						'order' => ['Customer.customerName' => 'desc'],
						'conditions' => [
							'OR' => [
								'customerName like' => '%'.$key.'%',
								'customerName like' => '%'.$key.'%'
							]
						]
					]
				);
				if(!empty($customer)):
					$this->set('customers', $customer);
					$this->set('not_found', false);
				else:
					$this->set('not_found', true);
					$this->set('customers', []);
				endif;
			}
		}else{
			$this->set('is_empty', false);
			$this->set('not_found', false);
			$this->set('customers', $this->Paginator->paginate());
			$this->set('is_search', false);
		}
		if ($this->request->is('button')){
			echo 'AAAAAAAAAAAA';
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		// if (!$this->Customer->exists($id)) {
		// 	throw new NotFoundException(__('Invalid customer'));
		// }
		$options = array('conditions' => array('Customer.' .$this->Customer->primaryKey => $id));
		$this->set('customer', $this->Customer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Customer->create();
			if ($this->Customer->save($this->request->data)) {
				$this->Flash->success(__('The customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The customer could not be saved. Please, try again.'));
			}
		}
	}

/**
 * reset method
 *
 * @return void
 */
	public function reset() {
		$this->redirect(array('action' => 'index'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		// if (!$this->Customer->exists($id)) {
		// 	throw new NotFoundException(__('Invalid customer'));
		// }
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Customer->save($this->request->data)) {
				$this->Flash->success(__('The customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The customer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Customer.' .$this->Customer->primaryKey => $id));
			$this->request->data = $this->Customer->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		// if (!$this->Customer->exists($id)) {
		// 	throw new NotFoundException(__('Invalid customer'));
		// }
		$this->request->allowMethod('post', 'delete');
		try {
			$this->Customer->delete($id);
			// if ($this->Customer->delete($id)) {
			// 	$this->Flash->success(__('The customer has been deleted.'));
			// }
		} catch (Exception $e) {
			$this->Flash->error(__('The customer could not be deleted. Please, try again.'));
		}
		
		return $this->redirect(array('action' => 'index'));
	}


/** 
 * Search method
 * @throws NotFoundException
 * @param string $id
 * @return void
 *
*/ 

	public function search() {
		if ($this->request->is('post')) {
			$key = $this->request->data['Customers']['keyword'];
			if($key == ''){
				$this->set('is_empty', true);
			}else{
				$this->set('is_empty', false);
				$customer = $this->Customer->find('all',
					[
						// 'fields' => all,
						'contain' => ['Writer.Name', 'Writer.slug'],
						'order' => ['Customer.customerName' => 'desc'],
						'conditions' => [
							'customerName like' => '%'.$key.'%'
						]
					]
				);
				if(!empty($customer)):
					$this->set('results', $customer);
					$this->set('not_found', false);
				else:
					$this->set('not_found', true);
				endif;
			}
		}
	}
}

