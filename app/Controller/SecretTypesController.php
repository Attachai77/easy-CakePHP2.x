<?php
App::uses('AppController', 'Controller');
/**
 * SecretTypes Controller
 *
 * @property SecretType $SecretType
 * @property PaginatorComponent $Paginator
 */
class SecretTypesController extends AppController {

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
		$conditions = [];

		if($this->request->is('post')){
			if (!empty($this->request->data['SearchSecretType']['id'])) {
				$conditions[] = array('SecretType.id' => $this->request->data['SearchSecretType']['id']);
			}if (!empty($this->request->data['SearchSecretType']['name'])) {
				$conditions[] = array('LOWER(SecretType.name) ILIKE' => '%' . strtolower($this->request->data['SearchSecretType']['name']) . '%');
			}if (!empty($this->request->data['SearchSecretType']['deleted'])) {
				$conditions[] = array('SecretType.deleted' => $this->request->data['SearchSecretType']['deleted']);
			}if (!empty($this->request->data['SearchSecretType']['create_uid'])) {
				$conditions[] = array('SecretType.create_uid' => $this->request->data['SearchSecretType']['create_uid']);
			}if (!empty($this->request->data['SearchSecretType']['update_uid'])) {
				$conditions[] = array('SecretType.update_uid' => $this->request->data['SearchSecretType']['update_uid']);
			}
		}


		$this->paginate = [
            'SecretType' => [
				'recursive'=>0,
				'limit'=>5,
                'conditions' => $conditions,
                'order' => ['SecretType.id' => 'ASC']
			]
		];
		$this->set('secretTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SecretType->exists($id)) {
			throw new NotFoundException(__('Invalid secret type'));
		}
		$options = array('conditions' => array('SecretType.' . $this->SecretType->primaryKey => $id));
		$this->set('secretType', $this->SecretType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SecretType->create();
			if ($this->SecretType->save($this->request->data)) {
				$this->Flash->success(__('The secret type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The secret type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->SecretType->id = $id;
		if (!$this->SecretType->exists($id)) {
			throw new NotFoundException(__('Invalid secret type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SecretType->save($this->request->data)) {
				$this->Flash->success(__('The secret type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The secret type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SecretType.' . $this->SecretType->primaryKey => $id));
			$this->request->data = $this->SecretType->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete() {
		$this->autoRender = false;
		if ($this->request->is('Ajax')) {
			$this->SecretType->id = $this->request->data['id'];
			if ($this->SecretType->delete()) {
				$respone = [
					'success'=>true,
					'message'=>''
				];
			}else{
				$respone = [
					'success'=>false,
					'message'=>'Can not delete secrettype. Please, try again.'
				];
			}

			$respone = json_encode($respone);
			return $respone; 
		}
	}
}
