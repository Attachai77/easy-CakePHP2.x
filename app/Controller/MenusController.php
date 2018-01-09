<?php
App::uses('AppController', 'Controller');
/**
 * Menus Controller
 *
 * @property Menu $Menu
 * @property PaginatorComponent $Paginator
 */
class MenusController extends AppController {

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
			if (!empty($this->request->data['SearchMenu']['id'])) {
				$conditions[] = array('Menu.id' => $this->request->data['SearchMenu']['id']);
			}if (!empty($this->request->data['SearchMenu']['menu_name'])) {
				$conditions[] = array('LOWER(Menu.menu_name) ILIKE' => '%' . strtolower($this->request->data['SearchMenu']['menu_name']) . '%');
			}if (!empty($this->request->data['SearchMenu']['menu_icon'])) {
				$conditions[] = array('LOWER(Menu.menu_icon) ILIKE' => '%' . strtolower($this->request->data['SearchMenu']['menu_icon']) . '%');
			}if (!empty($this->request->data['SearchMenu']['parent_id'])) {
				$conditions[] = array('Menu.parent_id' => $this->request->data['SearchMenu']['parent_id']);
			}if (!empty($this->request->data['SearchMenu']['is_sidebar'])) {
				$conditions[] = array('Menu.is_sidebar' => $this->request->data['SearchMenu']['is_sidebar']);
			}if (!empty($this->request->data['SearchMenu']['is_topmenu'])) {
				$conditions[] = array('Menu.is_topmenu' => $this->request->data['SearchMenu']['is_topmenu']);
			}if (!empty($this->request->data['SearchMenu']['has_child'])) {
				$conditions[] = array('Menu.has_child' => $this->request->data['SearchMenu']['has_child']);
			}
		}


		$this->paginate = [
            'Menu' => [
				'recursive'=>0,
				'limit'=>5,
                'conditions' => $conditions,
                'order' => ['Menu.id' => 'ASC']
			]
		];
		$this->set('menus', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
		$this->set('menu', $this->Menu->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Menu->create();
			if ($this->Menu->save($this->request->data)) {
				$this->Flash->success(__('The menu has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The menu could not be saved. Please, try again.'));
			}
		}
		$parentMenus = $this->Menu->find('list',['fields'=>['id','menu_name']]);
		$this->set(compact('parentMenus'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Menu->id = $id;
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid menu'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Menu->save($this->request->data)) {
				$this->Flash->success(__('The menu has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The menu could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
			$this->request->data = $this->Menu->find('first', $options);
		}
		$parentMenus = $this->Menu->ParentMenu->find('list');
		$this->set(compact('parentMenus'));
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
			$this->Menu->id = $this->request->data['id'];
			if ($this->Menu->delete()) {
				$respone = [
					'success'=>true,
					'message'=>''
				];
			}else{
				$respone = [
					'success'=>false,
					'message'=>'Can not delete menu. Please, try again.'
				];
			}

			$respone = json_encode($respone);
			return $respone; 
		}
	}
}
