<?php
App::uses('DocumentTitle', 'Model');

/**
 * DocumentTitle Test Case
 */
class DocumentTitleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.document_title',
		'app.document',
		'app.document_template',
		'app.secret_type',
		'app.speed_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DocumentTitle = ClassRegistry::init('DocumentTitle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DocumentTitle);

		parent::tearDown();
	}

}
