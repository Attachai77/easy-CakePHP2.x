<?php
App::uses('AppController', 'Controller');
/**
 * Topics Controller
 *
 * @property Topic $Topic
 * @property PaginatorComponent $Paginator
 */
class TopicsController extends AppController {

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
			if (!empty($this->request->data['SearchTopic']['id'])) {
				$conditions[] = array('Topic.id' => $this->request->data['SearchTopic']['id']);
			}if (!empty($this->request->data['SearchTopic']['topic_title'])) {
				$conditions[] = array('LOWER(Topic.topic_title) ILIKE' => '%' . strtolower($this->request->data['SearchTopic']['topic_title']) . '%');
			}if (!empty($this->request->data['SearchTopic']['topic_content'])) {
				$conditions[] = array('LOWER(Topic.topic_content) ILIKE' => '%' . strtolower($this->request->data['SearchTopic']['topic_content']) . '%');
			}
		}


		$this->paginate = [
            'Topic' => [
				'recursive'=>0,
				'limit'=>5,
                'conditions' => $conditions,
                'order' => ['Topic.id' => 'ASC']
			]
		];
		$this->set('topics', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Topic->exists($id)) {
			throw new NotFoundException(__('Invalid topic'));
		}
		$options = array('conditions' => array('Topic.' . $this->Topic->primaryKey => $id));
		$this->set('topic', $this->Topic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Topic->create();
			if ($this->Topic->save($this->request->data)) {
				$this->Flash->success(__('The topic has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The topic could not be saved. Please, try again.'));
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
        $this->Topic->id = $id;
		if (!$this->Topic->exists($id)) {
			throw new NotFoundException(__('Invalid topic'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Topic->save($this->request->data)) {
				$this->Flash->success(__('The topic has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The topic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Topic.' . $this->Topic->primaryKey => $id));
			$this->request->data = $this->Topic->find('first', $options);
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
			$this->Topic->id = $this->request->data['id'];
			if ($this->Topic->delete()) {
				$respone = [
					'success'=>true,
					'message'=>''
				];
			}else{
				$respone = [
					'success'=>false,
					'message'=>'Can not delete topic. Please, try again.'
				];
			}

			$respone = json_encode($respone);
			return $respone; 
		}
	}
}
