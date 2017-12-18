<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "s_tbl_Address".
 *
 * @property string $contactAddress
 * @property string $city
 * @property string $country
 * @property integer $addressID
 * @property integer $clientID
 *
 * @property STblClient $client
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_tbl_Address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clientID'], 'integer'],
            [['contactAddress', 'city', 'country'], 'string', 'max' => 50],
            [['clientID'], 'exist', 'skipOnError' => true, 'targetClass' => STblClient::className(), 'targetAttribute' => ['clientID' => 'clientID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contactAddress' => 'Contact Address',
            'city' => 'City',
            'country' => 'Country',
            'addressID' => 'Address ID',
            'clientID' => 'Client ID',
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
