<?php
/**
 * SpeedType Fixture
 */
class SpeedTypeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'create_uid' => array('type' => 'biginteger', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'update_uid' => array('type' => 'biginteger', 'null' => true, 'default' => null),
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
			'deleted' => 1,
			'created' => '2018-01-04 16:56:49',
			'create_uid' => '',
			'modified' => '2018-01-04 16:56:49',
			'update_uid' => ''
		),
	);

}
