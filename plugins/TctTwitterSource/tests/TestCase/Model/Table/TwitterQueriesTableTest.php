<?php
namespace TctTwitterSource\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use TctTwitterSource\Model\Table\TwitterQueriesTable;

/**
 * TctTwitterSource\Model\Table\TwitterQueriesTable Test Case
 */
class TwitterQueriesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.tct_twitter_source.twitter_queries',
        'plugin.tct_twitter_source.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TwitterQueries') ? [] : ['className' => 'TctTwitterSource\Model\Table\TwitterQueriesTable'];
        $this->TwitterQueries = TableRegistry::get('TwitterQueries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TwitterQueries);

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
