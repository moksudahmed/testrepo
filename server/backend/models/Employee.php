<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "p_tbl_Employee".
 *
 * @property string $joningDate
 * @property string $status
 * @property string $designation
 * @property integer $employeeID
 * @property integer $warehouseID
 * @property integer $departmentID
 *
 * @property OTblBranch[] $oTblBranches
 * @property OTblFactory[] $oTblFactories
 * @property PTblDisbusrmentPayment[] $pTblDisbusrmentPayments
 * @property PTblLeave[] $pTblLeaves
 * @property PTblLoan[] $pTblLoans
 * @property PTblOvertime[] $pTblOvertimes
 * @property PTblSalaryProfile[] $pTblSalaryProfiles
 * @property PTblTimesheet[] $pTblTimesheets
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'p_tbl_Employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['joningDate'], 'safe'],
            [['warehouseID', 'departmentID'], 'integer'],
            [['status', 'designation'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'joningDate' => 'Joning Date',
            'status' => 'Status',
            'designation' => 'Designation',
            'employeeID' => 'Employee ID',
            'warehouseID' => 'Warehouse ID',
            'departmentID' => 'Department ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOTblBranches()
    {
        return $this->hasMany(Branch::className(), ['employeeID' => 'employeeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOTblFactories()
    {
        return $this->hasMany(Factory::className(), ['employeeID' => 'employeeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPTblDisbusrmentPayments()
    {
        return $this->hasMany(DisbusrmentPayment::className(), ['employeeID' => 'employeeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPTblLeaves()
    {
        return $this->hasMany(Leave::className(), ['employeeID' => 'employeeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPTblLoans()
    {
        return $this->hasMany(Loan::className(), ['employeeID' => 'employeeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPTblOvertimes()
    {
        return $this->hasMany(Overtime::className(), ['employeeID' => 'employeeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPTblSalaryProfiles()
    {
        return $this->hasMany(SalaryProfile::className(), ['employeeID' => 'employeeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPTblTimesheets()
    {
        return $this->hasMany(Timesheet::className(), ['employeeID' => 'employeeID']);
    }
}
