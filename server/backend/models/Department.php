<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Department".
 *
 * @property string $contactNo
 * @property string $departmentName
 * @property string $location
 * @property integer $departmentID
 *
 * @property Employee[] $employees
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'o_tbl_Department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['departmentID'], 'required'],
            [['departmentID'], 'integer'],
            [['contactNo'], 'string', 'max' => 15],
            [['departmentName'], 'string', 'max' => 30],
            [['location'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contactNo' => 'Contact No',
            'departmentName' => 'Department Name',
            'location' => 'Location',
            'departmentID' => 'Department ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employee::className(), ['departmentID' => 'departmentID']);
    }
}
