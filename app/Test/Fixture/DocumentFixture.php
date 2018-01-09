<?php
/**
 * Document Fixture
 */
class DocumentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'document_template_id' => array('type' => 'biginteger', 'null' => false, 'default' => null),
		'secret_type_id' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'speed_type_id' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'speed_type_id2' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'doc_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'doc_no_con' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'document_title_id' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'inform' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200),
		'topic' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200),
		'to_person_do' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2000),
		'to_person_know' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2000),
		'vol_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'year' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8),
		'episode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'doc_when' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'doc_where' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'create_uid' => array('type' => 'biginteger', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'update_uid' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'master_uid' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'revision_id' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'doc_status' => array('type' => 'integer', 'null' => true, 'default' => null),
		'unit_id' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'document_ref_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'document_template_id' => '',
			'secret_type_id' => '',
			'speed_type_id' => '',
			'speed_type_id2' => '',
			'doc_no' => 'Lorem ipsum dolor ',
			'doc_no_con' => 1,
			'document_title_id' => '',
			'inform' => 'Lorem ipsum dolor sit amet',
			'topic' => 'Lorem ipsum dolor sit amet',
			'to_person_do' => 'Lorem ipsum dolor sit amet',
			'to_person_know' => 'Lorem ipsum dolor sit amet',
			'vol_no' => 'Lorem ipsum dolor sit amet',
			'year' => 'Lorem ',
			'episode' => 'Lorem ipsum dolor sit amet',
			'doc_when' => 'Lorem ipsum dolor sit amet',
			'doc_where' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'deleted' => 1,
			'created' => '2018-01-04 16:50:38',
			'create_uid' => '',
			'modified' => '2018-01-04 16:50:38',
			'update_uid' => '',
			'master_uid' => '',
			'revision_id' => '',
			'doc_status' => 1,
			'unit_id' => '',
			'document_ref_id' => 1
		),
	);

}
