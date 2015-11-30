<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TranslationRequestsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TranslationRequestsController Test Case
 */
class TranslationRequestsControllerTest extends IntegrationTestCase
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
