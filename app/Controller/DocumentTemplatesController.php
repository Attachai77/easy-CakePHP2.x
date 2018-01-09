<?php
App::uses('AppController', 'Controller');
/**
 * DocumentTemplates Controller
 *
 * @property DocumentTemplate $DocumentTemplate
 * @property PaginatorComponent $Paginator
 */
class DocumentTemplatesController extends AppController {

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
			if (!empty($this->request->data['SearchDocumentTemplate']['id'])) {
				$conditions[] = array('DocumentTemplate.id' => $this->request->data['SearchDocumentTemplate']['id']);
			}if (!empty($this->request->data['SearchDocumentTemplate']['name'])) {
				$conditions[] = array('LOWER(DocumentTemplate.name) ILIKE' => '%' . strtolower($this->request->data['SearchDocumentTemplate']['name']) . '%');
			}if (!empty($this->request->data['SearchDocumentTemplate']['level'])) {
				$conditions[] = array('DocumentTemplate.level' => $this->request->data['SearchDocumentTemplate']['level']);
			}if (!empty($this->request->data['SearchDocumentTemplate']['parent'])) {
				$conditions[] = array('DocumentTemplate.parent' => $this->request->data['SearchDocumentTemplate']['parent']);
			}if (!empty($this->request->data['SearchDocumentTemplate']['path'])) {
				$conditions[] = array('LOWER(DocumentTemplate.path) ILIKE' => '%' . strtolower($this->request->data['SearchDocumentTemplate']['path']) . '%');
			}if (!empty($this->request->data['SearchDocumentTemplate']['create_uid'])) {
				$conditions[] = array('DocumentTemplate.create_uid' => $this->request->data['SearchDocumentTemplate']['create_uid']);
			}if (!empty($this->request->data['SearchDocumentTemplate']['update_uid'])) {
				$conditions[] = array('DocumentTemplate.update_uid' => $this->request->data['SearchDocumentTemplate']['update_uid']);
			}if (!empty($this->request->data['SearchDocumentTemplate']['delete'])) {
				$conditions[] = array('DocumentTemplate.delete' => $this->request->data['SearchDocumentTemplate']['delete']);
			}if (!empty($this->request->data['SearchDocumentTemplate']['file_extension'])) {
				$conditions[] = array('LOWER(DocumentTemplate.file_extension) ILIKE' => '%' . strtolower($this->request->data['SearchDocumentTemplate']['file_extension']) . '%');
			}if (!empty($this->request->data['SearchDocumentTemplate']['file_size'])) {
				$conditions[] = array('DocumentTemplate.file_size' => $this->request->data['SearchDocumentTemplate']['file_size']);
			}if (!empty($this->request->data['SearchDocumentTemplate']['content_type'])) {
				$conditions[] = array('LOWER(DocumentTemplate.content_type) ILIKE' => '%' . strtolower($this->request->data['SearchDocumentTemplate']['content_type']) . '%');
			}if (!empty($this->request->data['SearchDocumentTemplate']['file_name'])) {
				$conditions[] = array('LOWER(DocumentTemplate.file_name) ILIKE' => '%' . strtolower($this->request->data['SearchDocumentTemplate']['file_name']) . '%');
			}if (!empty($this->request->data['SearchDocumentTemplate']['reg_format'])) {
				$conditions[] = array('LOWER(DocumentTemplate.reg_format) ILIKE' => '%' . strtolower($this->request->data['SearchDocumentTemplate']['reg_format']) . '%');
			}
		}


		$this->paginate = [
            'DocumentTemplate' => [
				'recursive'=>0,
				'limit'=>5,
                'conditions' => $conditions,
                'order' => ['DocumentTemplate.id' => 'ASC']
			]
		];
		$this->set('documentTemplates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DocumentTemplate->exists($id)) {
			throw new NotFoundException(__('Invalid document template'));
		}
		$options = array('conditions' => array('DocumentTemplate.' . $this->DocumentTemplate->primaryKey => $id));
		$this->set('documentTemplate', $this->DocumentTemplate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DocumentTemplate->create();
			if ($this->DocumentTemplate->save($this->request->data)) {
				$this->Flash->success(__('The document template has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The document template could not be saved. Please, try again.'));
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
        $this->DocumentTemplate->id = $id;
		if (!$this->DocumentTemplate->exists($id)) {
			throw new NotFoundException(__('Invalid document template'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DocumentTemplate->save($this->request->data)) {
				$this->Flash->success(__('The document template has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The document template could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DocumentTemplate.' . $this->DocumentTemplate->primaryKey => $id));
			$this->request->data = $this->DocumentTemplate->find('first', $options);
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
			$this->DocumentTemplate->id = $this->request->data['id'];
			if ($this->DocumentTemplate->delete()) {
				$respone = [
					'success'=>true,
					'message'=>''
				];
			}else{
				$respone = [
					'success'=>false,
					'message'=>'Can not delete documenttemplate. Please, try again.'
				];
			}

			$respone = json_encode($respone);
			return $respone; 
		}
	}
}
