<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "s_tbl_Person".
 *
 * @property string $title
 * @property string $firstName
 * @property string $lastName
 * @property string $dateOfBirth
 * @property string $gender
 * @property string $emailAddress
 * @property string $mobileNo
 * @property string $parmanentAddress
 * @property string $parmamentCity
 * @property string $maritalStatus
 * @property string $type
 * @property integer $personID
 *
 * @property STblAcademicHistory[] $sTblAcademicHistories
 * @property STblEmploymentHistory[] $sTblEmploymentHistories
 * @property STblClient $person
 * @property STblReferees[] $sTblReferees
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_tbl_Person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dateOfBirth'], 'safe'],
            [['title', 'firstName', 'lastName', 'gender', 'emailAddress', 'mobileNo', 'parmanentAddress', 'parmamentCity', 'maritalStatus'], 'string', 'max' => 50],
            [['type'], 'string', 'max' => 10],
            [['personID'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['personID' => 'clientID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Title',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'dateOfBirth' => 'Date Of Birth',
            'gender' => 'Gender',
            'emailAddress' => 'Email Address',
            'mobileNo' => 'Mobile No',
            'parmanentAddress' => 'Parmanent Address',
            'parmamentCity' => 'Parmament City',
            'maritalStatus' => 'Marital Status',
            'type' => 'Type',
            'personID' => 'Person ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSTblAcademicHistories()
    {
        return $this->hasMany(AcademicHistory::className(), ['personID' => 'personID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSTblEmploymentHistories()
    {
        return $this->hasMany(EmploymentHistory::className(), ['personID' => 'personID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerson()
    {
        return $this->hasOne(Client::className(), ['clientID' => 'personID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSTblReferees()
    {
        return $this->hasMany(Referees::className(), ['personID' => 'personID']);
    }
}
