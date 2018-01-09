<?php
App::uses('SpeedType', 'Model');

/**
 * SpeedType Test Case
 */
class SpeedTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.speed_type',
		'app.document',
		'app.document_template',
		'app.secret_type',
		'app.document_title'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SpeedType = ClassRegistry::init('SpeedType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SpeedType);

		parent::tearDown();
	}

}
