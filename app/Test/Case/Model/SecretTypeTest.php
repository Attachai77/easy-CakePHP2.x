<?php
App::uses('SecretType', 'Model');

/**
 * SecretType Test Case
 */
class SecretTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.secret_type',
		'app.document',
		'app.document_template',
		'app.speed_type',
		'app.document_title'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SecretType = ClassRegistry::init('SecretType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SecretType);

		parent::tearDown();
	}

}
