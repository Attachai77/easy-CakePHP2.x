<?php
App::uses('DocumentTemplate', 'Model');

/**
 * DocumentTemplate Test Case
 */
class DocumentTemplateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.document_template',
		'app.document',
		'app.secret_type',
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
		$this->DocumentTemplate = ClassRegistry::init('DocumentTemplate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DocumentTemplate);

		parent::tearDown();
	}

}
