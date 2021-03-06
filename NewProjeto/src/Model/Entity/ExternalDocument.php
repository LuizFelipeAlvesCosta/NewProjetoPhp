<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ExternalDocument Entity
 *
 * @property int $id
 * @property string $number_document
 * @property int $local_id
 * @property int $client_id
 * @property int $contact_id
 * @property int $treatment_id
 * @property string $reference
 * @property string $subject
 * @property string $description
 * @property int $user_id
 * @property string $user_function
 * @property \Cake\I18n\Time $created
 * @property string $Note
 * @property bool $status
 * @property bool $emitido
 *
 * @property \App\Model\Entity\DocumentsFile[] $documents_files
 * @property \App\Model\Entity\LocalsDocument $locals_document
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\ClientsContact $clients_contact
 * @property \App\Model\Entity\TreatmentsDocument $treatments_document
 * @property \App\Model\Entity\User $user
 */
class ExternalDocument extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
