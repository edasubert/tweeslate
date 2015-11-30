<?php
namespace TctTwitterSource\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestCase;
use TctTwitterSource\Controller\SourcesController;

/**
 * TctTwitterSource\Controller\SourcesController Test Case
 */
class SourcesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.tct_twitter_source.sources',
        'plugin.tct_twitter_source.users',
        'plugin.tct_twitter_source.scorings',
        'plugin.tct_twitter_source.translations',
        'plugin.tct_twitter_source.languages',
        'plugin.tct_twitter_source.translation_requests',
        'plugin.tct_twitter_source.languages_users',
        'plugin.tct_twitter_source.user_attributes',
        'plugin.tct_twitter_source.users_user_attributes'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
