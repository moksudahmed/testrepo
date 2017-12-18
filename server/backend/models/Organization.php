<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "o_tbl_Organization".
 *
 * @property string $adress
 * @property string $city
 * @property string $contactNo
 * @property string $organizationName
 * @property string $emailAddress
 * @property integer $organizationID
 *
 * @property OTblBranch[] $oTblBranches
 * @property OTblFactory[] $oTblFactories
 */
class Organization extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'o_tbl_Organization';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adress', 'city', 'contactNo', 'organizationName', 'emailAddress'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adress' => 'Adress',
            'city' => 'City',
            'contactNo' => 'Contact No',
            'organizationName' => 'Organization Name',
            'emailAddress' => 'Email Address',
            'organizationID' => 'Organization ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOTblBranches()
    {
        return $this->hasMany(OTblBranch::className(), ['organizationID' => 'organizationID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOTblFactories()
    {
        return $this->hasMany(OTblFactory::className(), ['organizationID' => 'organizationID']);
    }
}
