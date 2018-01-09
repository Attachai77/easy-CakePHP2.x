<?php
App::uses('AppController', 'Controller');
/**
 * SpeedTypes Controller
 *
 * @property SpeedType $SpeedType
 * @property PaginatorComponent $Paginator
 */
class SpeedTypesController extends AppController {

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
			if (!empty($this->request->data['SearchSpeedType']['id'])) {
				$conditions[] = array('SpeedType.id' => $this->request->data['SearchSpeedType']['id']);
			}if (!empty($this->request->data['SearchSpeedType']['name'])) {
				$conditions[] = array('LOWER(SpeedType.name) ILIKE' => '%' . strtolower($this->request->data['SearchSpeedType']['name']) . '%');
			}if (!empty($this->request->data['SearchSpeedType']['deleted'])) {
				$conditions[] = array('SpeedType.deleted' => $this->request->data['SearchSpeedType']['deleted']);
			}if (!empty($this->request->data['SearchSpeedType']['create_uid'])) {
				$conditions[] = array('SpeedType.create_uid' => $this->request->data['SearchSpeedType']['create_uid']);
			}if (!empty($this->request->data['SearchSpeedType']['update_uid'])) {
				$conditions[] = array('SpeedType.update_uid' => $this->request->data['SearchSpeedType']['update_uid']);
			}
		}


		$this->paginate = [
            'SpeedType' => [
				'recursive'=>0,
				'limit'=>5,
                'conditions' => $conditions,
                'order' => ['SpeedType.id' => 'ASC']
			]
		];
		$this->set('speedTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SpeedType->exists($id)) {
			throw new NotFoundException(__('Invalid speed type'));
		}
		$options = array('conditions' => array('SpeedType.' . $this->SpeedType->primaryKey => $id));
		$this->set('speedType', $this->SpeedType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SpeedType->create();
			if ($this->SpeedType->save($this->request->data)) {
				$this->Flash->success(__('The speed type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The speed type could not be saved. Please, try again.'));
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
        $this->SpeedType->id = $id;
		if (!$this->SpeedType->exists($id)) {
			throw new NotFoundException(__('Invalid speed type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SpeedType->save($this->request->data)) {
				$this->Flash->success(__('The speed type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The speed type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SpeedType.' . $this->SpeedType->primaryKey => $id));
			$this->request->data = $this->SpeedType->find('first', $options);
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
			$this->SpeedType->id = $this->request->data['id'];
			if ($this->SpeedType->delete()) {
				$respone = [
					'success'=>true,
					'message'=>''
				];
			}else{
				$respone = [
					'success'=>false,
					'message'=>'Can not delete speedtype. Please, try again.'
				];
			}

			$respone = json_encode($respone);
			return $respone; 
		}
	}
}
