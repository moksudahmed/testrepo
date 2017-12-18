<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Employee".
 *
 * @property string $designation
 * @property string $joningDate
 * @property string $status
 * @property integer $employeeID
 * @property integer $departmentID
 *
 * @property Department $department
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['joningDate'], 'safe'],
            [['employeeID'], 'required'],
            [['employeeID', 'departmentID'], 'integer'],
            [['designation'], 'string', 'max' => 50],
            [['status'], 'string', 'max' => 10],
            [['departmentID'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['departmentID' => 'departmentID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'designation' => 'Designation',
            'joningDate' => 'Joning Date',
            'status' => 'Status',
            'employeeID' => 'Employee ID',
            'departmentID' => 'Department ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['departmentID' => 'departmentID']);
    }
}
