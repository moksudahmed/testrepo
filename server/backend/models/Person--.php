<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property integer $personID
 * @property string $per_firstName
 * @property string $per_middleName
 * @property string $per_lastName
 * @property string $per_dateOfBirth
 * @property string $per_bloodGroup
 * @property string $per_title
 * @property string $per_gender
 * @property string $per_maritalStatus
 * @property string $per_nationality
 * @property string $per_fathersName
 * @property string $per_mothersName
 * @property string $per_spouseName
 * @property string $per_permanentAddress
 * @property string $per_city
 * @property string $per_postCode
 * @property string $per_telephone
 * @property string $per_mobileOne
 * @property string $per_mobileTwo
 * @property string $per_email
 * @property string $per_presentAddress
 * @property string $per_computerLiteracy
 * @property string $per_otherActivities
 * @property string $per_nationalID
 * @property string $per_entryDate
 * @property integer $ex_per_image
 *
 * @property Employees $employees
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['personID', 'per_firstName', 'per_lastName', 'per_bloodGroup', 'per_title', 'per_gender', 'per_maritalStatus', 'per_nationality', 'per_mobileOne'], 'required'],
            [['personID', 'ex_per_image'], 'integer'],
            [['per_dateOfBirth', 'per_entryDate'], 'safe'],
            [['per_firstName', 'per_middleName', 'per_lastName', 'per_city', 'per_postCode', 'per_nationalID'], 'string', 'max' => 50],
            [['per_bloodGroup'], 'string', 'max' => 10],
            [['per_title'], 'string', 'max' => 30],
            [['per_gender'], 'string', 'max' => 8],
            [['per_maritalStatus', 'per_nationality'], 'string', 'max' => 20],
            [['per_fathersName', 'per_mothersName', 'per_spouseName', 'per_email'], 'string', 'max' => 100],
            [['per_permanentAddress', 'per_presentAddress', 'per_computerLiteracy', 'per_otherActivities'], 'string', 'max' => 300],
            [['per_telephone', 'per_mobileOne', 'per_mobileTwo'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'personID' => 'Person ID',
            'per_firstName' => 'Per First Name',
            'per_middleName' => 'Per Middle Name',
            'per_lastName' => 'Per Last Name',
            'per_dateOfBirth' => 'Per Date Of Birth',
            'per_bloodGroup' => 'Per Blood Group',
            'per_title' => 'Per Title',
            'per_gender' => 'Per Gender',
            'per_maritalStatus' => 'Per Marital Status',
            'per_nationality' => 'Per Nationality',
            'per_fathersName' => 'Per Fathers Name',
            'per_mothersName' => 'Per Mothers Name',
            'per_spouseName' => 'Per Spouse Name',
            'per_permanentAddress' => 'Per Permanent Address',
            'per_city' => 'Per City',
            'per_postCode' => 'Per Post Code',
            'per_telephone' => 'Per Telephone',
            'per_mobileOne' => 'Per Mobile One',
            'per_mobileTwo' => 'Per Mobile Two',
            'per_email' => 'Per Email',
            'per_presentAddress' => 'Per Present Address',
            'per_computerLiteracy' => 'Per Computer Literacy',
            'per_otherActivities' => 'Per Other Activities',
            'per_nationalID' => 'Per National ID',
            'per_entryDate' => 'Per Entry Date',
            'ex_per_image' => 'Ex Per Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasOne(Employees::className(), ['employeeid' => 'personID']);
    }
}
