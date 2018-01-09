<?php
App::uses('AppModel', 'Model');
/**
 * Document Model
 *
 * @property DocumentTemplate $DocumentTemplate
 * @property SecretType $SecretType
 * @property SpeedType $SpeedType
 * @property DocumentTitle $DocumentTitle
 * @property Revision $Revision
 * @property Unit $Unit
 * @property DocumentRef $DocumentRef
 */
class Document extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'deleted' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'DocumentTemplate' => array(
			'className' => 'DocumentTemplate',
			'foreignKey' => 'document_template_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SecretType' => array(
			'className' => 'SecretType',
			'foreignKey' => 'secret_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SpeedType' => array(
			'className' => 'SpeedType',
			'foreignKey' => 'speed_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DocumentTitle' => array(
			'className' => 'DocumentTitle',
			'foreignKey' => 'document_title_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		// 'Revision' => array(
		// 	'className' => 'Revision',
		// 	'foreignKey' => 'revision_id',
		// 	'conditions' => '',
		// 	'fields' => '',
		// 	'order' => ''
		// ),
		// 'Unit' => array(
		// 	'className' => 'Unit',
		// 	'foreignKey' => 'unit_id',
		// 	'conditions' => '',
		// 	'fields' => '',
		// 	'order' => ''
		// ),
		// 'DocumentRef' => array(
		// 	'className' => 'DocumentRef',
		// 	'foreignKey' => 'document_ref_id',
		// 	'conditions' => '',
		// 	'fields' => '',
		// 	'order' => ''
		// )
	);
}
