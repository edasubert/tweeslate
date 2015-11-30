<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserAttributesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserAttributesTable Test Case
 */
class UserAttributesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_attributes',
        'app.users',
        'app.scorings',
        'app.sources',
        'app.languages',
        'app.translation_requests',
        'app.translations',
        'app.languages_users',
        'app.users_user_attributes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserAttributes') ? [] : ['className' => 'App\Model\Table\UserAttributesTable'];
        $this->UserAttributes = TableRegistry::get('UserAttributes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserAttributes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
