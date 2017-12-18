<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "s_tbl_ClientAccount".
 *
 * @property string $accountName
 * @property string $accountNo
 * @property string $joiningDate
 * @property boolean $active
 * @property boolean $suspended
 * @property double $accountCreditLimit
 * @property integer $clientAccountID
 * @property integer $clientID
 * @property integer $organizationID
 *
 * @property STblClient $client
 */
class ClientAccount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_tbl_ClientAccount';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['joiningDate'], 'safe'],
            [['active', 'suspended'], 'boolean'],
            [['accountCreditLimit'], 'number'],
            [['clientID', 'organizationID'], 'integer'],
            [['accountName', 'accountNo'], 'string', 'max' => 50],
            [['clientID'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['clientID' => 'clientID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'accountName' => 'Account Name',
            'accountNo' => 'Account No',
            'joiningDate' => 'Joining Date',
            'active' => 'Active',
            'suspended' => 'Suspended',
            'accountCreditLimit' => 'Account Credit Limit',
            'clientAccountID' => 'Client Account ID',
            'clientID' => 'Client ID',
            'organizationID' => 'Organization ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Client::className(), ['clientID' => 'clientID']);
    }
}
