<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Person".
 *
 * @property integer $personID
 * @property string $title
 * @property string $firstName
 * @property string $lastName
 * @property string $dateOfBirth
 * @property string $gender
 * @property string $presentAddress
 * @property string $presentcity
 * @property string $parmanentAddress
 * @property string $oldcity
 * @property string $emailAddress
 * @property string $maritalStatus
 * @property string $mobileNo
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['personID'], 'required'],
            [['personID'], 'integer'],
            [['dateOfBirth'], 'safe'],
            [['title'], 'string', 'max' => 30],
            [['firstName', 'lastName', 'emailAddress', 'maritalStatus'], 'string', 'max' => 50],
            [['gender', 'presentcity', 'oldcity'], 'string', 'max' => 10],
            [['presentAddress', 'parmanentAddress'], 'string', 'max' => 200],
            [['mobileNo'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'personID' => 'Person ID',
            'title' => 'Title',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'dateOfBirth' => 'Date Of Birth',
            'gender' => 'Gender',
            'presentAddress' => 'Present Address',
            'presentcity' => 'Presentcity',
            'parmanentAddress' => 'Parmanent Address',
            'oldcity' => 'Oldcity',
            'emailAddress' => 'Email Address',
            'maritalStatus' => 'Marital Status',
            'mobileNo' => 'Mobile No',
        ];
    }
}
