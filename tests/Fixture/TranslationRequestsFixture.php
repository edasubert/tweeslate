<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TranslationRequestsFixture
 *
 */
class TranslationRequestsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'language_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'source_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'hash' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'translation_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'language_key' => ['type' => 'index', 'columns' => ['language_id'], 'length' => []],
            'source_key' => ['type' => 'index', 'columns' => ['source_id'], 'length' => []],
            'translation_key' => ['type' => 'index', 'columns' => ['translation_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'user_id' => ['type' => 'unique', 'columns' => ['user_id', 'language_id', 'source_id'], 'length' => []],
            'hash' => ['type' => 'unique', 'columns' => ['hash'], 'length' => []],
            'translation_requests_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'translation_requests_ibfk_2' => ['type' => 'foreign', 'columns' => ['language_id'], 'references' => ['languages', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'translation_requests_ibfk_3' => ['type' => 'foreign', 'columns' => ['source_id'], 'references' => ['sources', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'translation_requests_ibfk_4' => ['type' => 'foreign', 'columns' => ['translation_id'], 'references' => ['translations', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'user_id' => 1,
            'language_id' => 1,
            'source_id' => 1,
            'hash' => '126629ef-ef22-4a32-b1fb-8728e427b07d',
            'created' => '2015-11-28 14:21:58',
            'translation_id' => 1
        ],
    ];
}
