<?php
App::uses('Document', 'Model');

/**
 * Document Test Case
 */
class DocumentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.document',
		'app.document_template',
		'app.secret_type',
		'app.speed_type',
		'app.document_title',
		'app.revision',
		'app.unit',
		'app.document_ref'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Document = ClassRegistry::init('Document');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Document);

		parent::tearDown();
	}

}
