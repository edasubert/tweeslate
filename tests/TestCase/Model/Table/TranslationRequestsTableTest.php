<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TranslationRequestsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TranslationRequestsTable Test Case
 */
class TranslationRequestsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.translation_requests',
        'app.users',
        'app.scorings',
        'app.sources',
        'app.languages',
        'app.translations',
        'app.languages_users',
        'app.user_attributes',
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
        $config = TableRegistry::exists('TranslationRequests') ? [] : ['className' => 'App\Model\Table\TranslationRequestsTable'];
        $this->TranslationRequests = TableRegistry::get('TranslationRequests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TranslationRequests);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
