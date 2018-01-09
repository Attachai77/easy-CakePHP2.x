<?php
/**
 * Menu Fixture
 */
class MenuFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'menu_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'menu_icon' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'parent_id' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'is_sidebar' => array('type' => 'boolean', 'null' => false, 'default' => false),
		'is_topmenu' => array('type' => 'boolean', 'null' => false, 'default' => false),
		'has_child' => array('type' => 'boolean', 'null' => false, 'default' => false),
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
			'menu_name' => 'Lorem ipsum dolor sit amet',
			'menu_icon' => 'Lorem ipsum dolor sit amet',
			'parent_id' => '',
			'is_sidebar' => 1,
			'is_topmenu' => 1,
			'has_child' => 1
		),
	);

}
