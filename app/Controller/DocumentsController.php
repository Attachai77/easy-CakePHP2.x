<?php
App::uses('AppController', 'Controller');
/**
 * Documents Controller
 *
 * @property Document $Document
 * @property PaginatorComponent $Paginator
 */
class DocumentsController extends AppController {

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
			if (!empty($this->request->data['SearchDocument']['id'])) {
				$conditions[] = array('Document.id' => $this->request->data['SearchDocument']['id']);
			}if (!empty($this->request->data['SearchDocument']['document_template_id'])) {
				$conditions[] = array('Document.document_template_id' => $this->request->data['SearchDocument']['document_template_id']);
			}if (!empty($this->request->data['SearchDocument']['secret_type_id'])) {
				$conditions[] = array('Document.secret_type_id' => $this->request->data['SearchDocument']['secret_type_id']);
			}if (!empty($this->request->data['SearchDocument']['speed_type_id'])) {
				$conditions[] = array('Document.speed_type_id' => $this->request->data['SearchDocument']['speed_type_id']);
			}if (!empty($this->request->data['SearchDocument']['speed_type_id2'])) {
				$conditions[] = array('Document.speed_type_id2' => $this->request->data['SearchDocument']['speed_type_id2']);
			}if (!empty($this->request->data['SearchDocument']['doc_no'])) {
				$conditions[] = array('LOWER(Document.doc_no) ILIKE' => '%' . strtolower($this->request->data['SearchDocument']['doc_no']) . '%');
			}if (!empty($this->request->data['SearchDocument']['doc_no_con'])) {
				$conditions[] = array('Document.doc_no_con' => $this->request->data['SearchDocument']['doc_no_con']);
			}if (!empty($this->request->data['SearchDocument']['document_title_id'])) {
				$conditions[] = array('Document.document_title_id' => $this->request->data['SearchDocument']['document_title_id']);
			}if (!empty($this->request->data['SearchDocument']['inform'])) {
				$conditions[] = array('LOWER(Document.inform) ILIKE' => '%' . strtolower($this->request->data['SearchDocument']['inform']) . '%');
			}if (!empty($this->request->data['SearchDocument']['topic'])) {
				$conditions[] = array('LOWER(Document.topic) ILIKE' => '%' . strtolower($this->request->data['SearchDocument']['topic']) . '%');
			}if (!empty($this->request->data['SearchDocument']['to_person_do'])) {
				$conditions[] = array('LOWER(Document.to_person_do) ILIKE' => '%' . strtolower($this->request->data['SearchDocument']['to_person_do']) . '%');
			}if (!empty($this->request->data['SearchDocument']['to_person_know'])) {
				$conditions[] = array('LOWER(Document.to_person_know) ILIKE' => '%' . strtolower($this->request->data['SearchDocument']['to_person_know']) . '%');
			}if (!empty($this->request->data['SearchDocument']['vol_no'])) {
				$conditions[] = array('LOWER(Document.vol_no) ILIKE' => '%' . strtolower($this->request->data['SearchDocument']['vol_no']) . '%');
			}if (!empty($this->request->data['SearchDocument']['year'])) {
				$conditions[] = array('LOWER(Document.year) ILIKE' => '%' . strtolower($this->request->data['SearchDocument']['year']) . '%');
			}if (!empty($this->request->data['SearchDocument']['episode'])) {
				$conditions[] = array('LOWER(Document.episode) ILIKE' => '%' . strtolower($this->request->data['SearchDocument']['episode']) . '%');
			}if (!empty($this->request->data['SearchDocument']['doc_when'])) {
				$conditions[] = array('LOWER(Document.doc_when) ILIKE' => '%' . strtolower($this->request->data['SearchDocument']['doc_when']) . '%');
			}if (!empty($this->request->data['SearchDocument']['doc_where'])) {
				$conditions[] = array('LOWER(Document.doc_where) ILIKE' => '%' . strtolower($this->request->data['SearchDocument']['doc_where']) . '%');
			}if (!empty($this->request->data['SearchDocument']['description'])) {
				$conditions[] = array('LOWER(Document.description) ILIKE' => '%' . strtolower($this->request->data['SearchDocument']['description']) . '%');
			}if (!empty($this->request->data['SearchDocument']['deleted'])) {
				$conditions[] = array('Document.deleted' => $this->request->data['SearchDocument']['deleted']);
			}if (!empty($this->request->data['SearchDocument']['create_uid'])) {
				$conditions[] = array('Document.create_uid' => $this->request->data['SearchDocument']['create_uid']);
			}if (!empty($this->request->data['SearchDocument']['update_uid'])) {
				$conditions[] = array('Document.update_uid' => $this->request->data['SearchDocument']['update_uid']);
			}if (!empty($this->request->data['SearchDocument']['master_uid'])) {
				$conditions[] = array('Document.master_uid' => $this->request->data['SearchDocument']['master_uid']);
			}if (!empty($this->request->data['SearchDocument']['revision_id'])) {
				$conditions[] = array('Document.revision_id' => $this->request->data['SearchDocument']['revision_id']);
			}if (!empty($this->request->data['SearchDocument']['doc_status'])) {
				$conditions[] = array('Document.doc_status' => $this->request->data['SearchDocument']['doc_status']);
			}if (!empty($this->request->data['SearchDocument']['unit_id'])) {
				$conditions[] = array('Document.unit_id' => $this->request->data['SearchDocument']['unit_id']);
			}if (!empty($this->request->data['SearchDocument']['document_ref_id'])) {
				$conditions[] = array('Document.document_ref_id' => $this->request->data['SearchDocument']['document_ref_id']);
			}
		}


		$this->paginate = [
            'Document' => [
				'recursive'=>0,
				'limit'=>5,
                'conditions' => $conditions,
                'order' => ['Document.id' => 'ASC']
			]
		];
		$this->set('documents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
		$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
		$this->set('document', $this->Document->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Document->create();
			if ($this->Document->save($this->request->data)) {
				$this->Flash->success(__('The document has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The document could not be saved. Please, try again.'));
			}
		}
		$documentTemplates = $this->Document->DocumentTemplate->find('list');
		$secretTypes = $this->Document->SecretType->find('list');
		$speedTypes = $this->Document->SpeedType->find('list');
		$documentTitles = $this->Document->DocumentTitle->find('list');
		$this->set(compact('documentTemplates', 'secretTypes', 'speedTypes', 'documentTitles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Document->id = $id;
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Document->save($this->request->data)) {
				$this->Flash->success(__('The document has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The document could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
			$this->request->data = $this->Document->find('first', $options);
		}
		$documentTemplates = $this->Document->DocumentTemplate->find('list');
		$secretTypes = $this->Document->SecretType->find('list');
		$speedTypes = $this->Document->SpeedType->find('list');
		$documentTitles = $this->Document->DocumentTitle->find('list');
		$this->set(compact('documentTemplates', 'secretTypes', 'speedTypes', 'documentTitles'));
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
			$this->Document->id = $this->request->data['id'];
			if ($this->Document->delete()) {
				$respone = [
					'success'=>true,
					'message'=>''
				];
			}else{
				$respone = [
					'success'=>false,
					'message'=>'Can not delete document. Please, try again.'
				];
			}

			$respone = json_encode($respone);
			return $respone; 
		}
	}
}
