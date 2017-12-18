<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "o_tbl_Branch".
 *
 * @property string $address
 * @property string $branchName
 * @property string $contactNo
 * @property string $emailAddress
 * @property integer $branchID
 * @property integer $organizationID
 * @property integer $employeeID
 *
 * @property OTblOrganization $organization
 * @property PTblEmployee $employee
 * @property OTblDepartment[] $oTblDepartments
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'o_tbl_Branch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['organizationID', 'employeeID'], 'integer'],
            [['address', 'branchName', 'contactNo', 'emailAddress'], 'string', 'max' => 10],
            [['organizationID'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organizationID' => 'organizationID']],
            [['employeeID'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employeeID' => 'employeeID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'address' => 'Address',
            'branchName' => 'Branch Name',
            'contactNo' => 'Contact No',
            'emailAddress' => 'Email Address',
            'branchID' => 'Branch ID',
            'organizationID' => 'Organization ID',
            'employeeID' => 'Employee ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['organizationID' => 'organizationID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['employeeID' => 'employeeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOTblDepartments()
    {
        return $this->hasMany(Department::className(), ['branchID' => 'branchID']);
    }
}
