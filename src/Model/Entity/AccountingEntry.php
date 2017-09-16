<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccountingEntry Entity
 *
 * @property int $id
 * @property int $ledger_id
 * @property float $debit
 * @property float $credit
 * @property \Cake\I18n\FrozenDate $transaction_date
 * @property int $company_id
 *
 * @property \App\Model\Entity\Ledger $ledger
 * @property \App\Model\Entity\Company $company
 */
class AccountingEntry extends Entity
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
