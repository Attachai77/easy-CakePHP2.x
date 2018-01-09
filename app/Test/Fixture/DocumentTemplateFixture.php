<?php
/**
 * DocumentTemplate Fixture
 */
class DocumentTemplateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000),
		'level' => array('type' => 'integer', 'null' => true, 'default' => null),
		'parent' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'path' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'create_uid' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'update_uid' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'delete' => array('type' => 'boolean', 'null' => true, 'default' => false),
		'file_extension' => array('type' => 'string', 'null' => true, 'default' => null),
		'file_size' => array('type' => 'integer', 'null' => true, 'default' => null),
		'content_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'file_name' => array('type' => 'string', 'null' => true, 'default' => null),
		'reg_format' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'level' => 1,
			'parent' => '',
			'path' => 'Lorem ipsum dolor sit amet',
			'created' => '2018-01-04 16:57:05',
			'create_uid' => '',
			'modified' => '2018-01-04 16:57:05',
			'update_uid' => '',
			'delete' => 1,
			'file_extension' => 'Lorem ipsum dolor sit amet',
			'file_size' => 1,
			'content_type' => 'Lorem ipsum dolor sit amet',
			'file_name' => 'Lorem ipsum dolor sit amet',
			'reg_format' => 'Lorem ipsum dolor sit amet'
		),
	);

}
