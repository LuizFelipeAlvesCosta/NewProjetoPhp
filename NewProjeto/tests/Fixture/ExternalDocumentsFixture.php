<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExternalDocumentsFixture
 *
 */
class ExternalDocumentsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => '10', 'autoIncrement' => true, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'number_document' => ['type' => 'string', 'length' => '10', 'null' => true, 'default' => null, 'collate' => 'Latin1_General_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'local_id' => ['type' => 'integer', 'length' => '10', 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'client_id' => ['type' => 'integer', 'length' => '10', 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'contact_id' => ['type' => 'integer', 'length' => '10', 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'treatment_id' => ['type' => 'integer', 'length' => '10', 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'reference' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'Latin1_General_CI_AS', 'precision' => null, 'comment' => null],
        'subject' => ['type' => 'string', 'length' => '45', 'null' => false, 'default' => null, 'collate' => 'Latin1_General_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'description' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'Latin1_General_CI_AS', 'precision' => null, 'comment' => null],
        'user_id' => ['type' => 'integer', 'length' => '10', 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'user_function' => ['type' => 'string', 'length' => '45', 'null' => false, 'default' => null, 'collate' => 'Latin1_General_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        'Note' => ['type' => 'string', 'length' => '350', 'null' => true, 'default' => null, 'collate' => 'Latin1_General_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'emitido' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_local' => ['type' => 'foreign', 'columns' => ['local_id'], 'references' => ['locals_document', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_client' => ['type' => 'foreign', 'columns' => ['client_id'], 'references' => ['clients', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_contact' => ['type' => 'foreign', 'columns' => ['contact_id'], 'references' => ['clients_contact', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_treatment' => ['type' => 'foreign', 'columns' => ['treatment_id'], 'references' => ['treatments_document', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_sender_external_document' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'number_document' => 'Lorem ip',
            'local_id' => 1,
            'client_id' => 1,
            'contact_id' => 1,
            'treatment_id' => 1,
            'reference' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'subject' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'user_id' => 1,
            'user_function' => 'Lorem ipsum dolor sit amet',
            'created' => 1512154360,
            'Note' => 'Lorem ipsum dolor sit amet',
            'status' => 1,
            'emitido' => 1
        ],
    ];
}
