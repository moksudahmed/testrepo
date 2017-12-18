<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property integer $employeeid
 * @property string $emp_joiningDate
 * @property string $emp_leaveDate
 * @property boolean $ex_emp_active
 * @property string $emp_referenceNo
 * @property string $emp_computerLiteracy
 * @property string $emp_otherActivities
 * @property string $emp_personalStatment
 * @property boolean $emp_criminalConviction
 * @property string $emp_convictionDetails
 * @property string $emp_passportNo
 * @property string $emp_drivingLicenseNo
 *
 * @property Person $employee
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employeeid'], 'required'],
            [['employeeid'], 'integer'],
            [['emp_joiningDate', 'emp_leaveDate'], 'safe'],
            [['ex_emp_active', 'emp_criminalConviction'], 'boolean'],
            [['emp_personalStatment', 'emp_convictionDetails'], 'string'],           
            [['emp_computerLiteracy', 'emp_otherActivities'], 'string', 'max' => 300],
            [['emp_passportNo', 'emp_drivingLicenseNo'], 'string', 'max' => 50],            
            [['employeeid'], 'exist', 'skipOnError' => true, 'targetClass' => Person::className(), 'targetAttribute' => ['employeeid' => 'personID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employeeid' => 'Employeeid',
            'emp_joiningDate' => 'Emp Joining Date',
            'emp_leaveDate' => 'Emp Leave Date',
            'ex_emp_active' => 'Ex Emp Active',           
            'emp_computerLiteracy' => 'Emp Computer Literacy',
            'emp_otherActivities' => 'Emp Other Activities',
            'emp_personalStatment' => 'Emp Personal Statment',
            'emp_criminalConviction' => 'Emp Criminal Conviction',
            'emp_convictionDetails' => 'Emp Conviction Details',
            'emp_passportNo' => 'Emp Passport No',
            'emp_drivingLicenseNo' => 'Emp Driving License No',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Person::className(), ['personID' => 'employeeid']);
    }
}
