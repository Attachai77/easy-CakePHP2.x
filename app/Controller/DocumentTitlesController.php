<?php
App::uses('AppController', 'Controller');
/**
 * DocumentTitles Controller
 *
 * @property DocumentTitle $DocumentTitle
 * @property PaginatorComponent $Paginator
 */
class DocumentTitlesController extends AppController {

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
			if (!empty($this->request->data['SearchDocumentTitle']['id'])) {
				$conditions[] = array('DocumentTitle.id' => $this->request->data['SearchDocumentTitle']['id']);
			}if (!empty($this->request->data['SearchDocumentTitle']['name'])) {
				$conditions[] = array('LOWER(DocumentTitle.name) ILIKE' => '%' . strtolower($this->request->data['SearchDocumentTitle']['name']) . '%');
			}if (!empty($this->request->data['SearchDocumentTitle']['deleted'])) {
				$conditions[] = array('DocumentTitle.deleted' => $this->request->data['SearchDocumentTitle']['deleted']);
			}if (!empty($this->request->data['SearchDocumentTitle']['create_uid'])) {
				$conditions[] = array('DocumentTitle.create_uid' => $this->request->data['SearchDocumentTitle']['create_uid']);
			}if (!empty($this->request->data['SearchDocumentTitle']['update_uid'])) {
				$conditions[] = array('DocumentTitle.update_uid' => $this->request->data['SearchDocumentTitle']['update_uid']);
			}
		}


		$this->paginate = [
            'DocumentTitle' => [
				'recursive'=>0,
				'limit'=>5,
                'conditions' => $conditions,
                'order' => ['DocumentTitle.id' => 'ASC']
			]
		];
		$this->set('documentTitles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DocumentTitle->exists($id)) {
			throw new NotFoundException(__('Invalid document title'));
		}
		$options = array('conditions' => array('DocumentTitle.' . $this->DocumentTitle->primaryKey => $id));
		$this->set('documentTitle', $this->DocumentTitle->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DocumentTitle->create();
			if ($this->DocumentTitle->save($this->request->data)) {
				$this->Flash->success(__('The document title has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The document title could not be saved. Please, try again.'));
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
        $this->DocumentTitle->id = $id;
		if (!$this->DocumentTitle->exists($id)) {
			throw new NotFoundException(__('Invalid document title'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DocumentTitle->save($this->request->data)) {
				$this->Flash->success(__('The document title has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The document title could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DocumentTitle.' . $this->DocumentTitle->primaryKey => $id));
			$this->request->data = $this->DocumentTitle->find('first', $options);
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
			$this->DocumentTitle->id = $this->request->data['id'];
			if ($this->DocumentTitle->delete()) {
				$respone = [
					'success'=>true,
					'message'=>''
				];
			}else{
				$respone = [
					'success'=>false,
					'message'=>'Can not delete documenttitle. Please, try again.'
				];
			}

			$respone = json_encode($respone);
			return $respone; 
		}
	}
}
