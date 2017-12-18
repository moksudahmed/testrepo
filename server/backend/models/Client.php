<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "s_tbl_Client".
 *
 * @property string $clientType
 * @property string $date
 * @property string $remarks
 * @property integer $clientID
 *
 * @property STblAddress[] $sTblAddresses
 * @property STblClientAccount[] $sTblClientAccounts
 * @property STblCompany $sTblCompany
 * @property STblPerson $sTblPerson
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_tbl_Client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['clientType', 'remarks'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'clientType' => 'Client Type',
            'date' => 'Date',
            'remarks' => 'Remarks',
            'clientID' => 'Client ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSTblAddresses()
    {
        return $this->hasMany(Address::className(), ['clientID' => 'clientID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSTblClientAccounts()
    {
        return $this->hasMany(ClientAccount::className(), ['clientID' => 'clientID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSTblCompany()
    {
        return $this->hasOne(Company::className(), ['companyID' => 'clientID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSTblPerson()
    {
        return $this->hasOne(Person::className(), ['personID' => 'clientID']);
    }
}
