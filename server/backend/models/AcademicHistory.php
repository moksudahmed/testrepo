<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "s_tbl_AcademicHistory".
 *
 * @property string $degreeName
 * @property string $institutionName
 * @property string $awardingBody
 * @property integer $passingYear
 * @property string $result
 * @property integer $academicHistoryID
 * @property integer $personID
 *
 * @property STblPerson $person
 */
class AcademicHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_tbl_AcademicHistory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['passingYear', 'personID'], 'integer'],
            [['degreeName', 'institutionName', 'awardingBody', 'result'], 'string', 'max' => 50],
            [['personID'], 'exist', 'skipOnError' => true, 'targetClass' => STblPerson::className(), 'targetAttribute' => ['personID' => 'personID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'degreeName' => 'Degree Name',
            'institutionName' => 'Institution Name',
            'awardingBody' => 'Awarding Body',
            'passingYear' => 'Passing Year',
            'result' => 'Result',
            'academicHistoryID' => 'Academic History ID',
            'personID' => 'Person ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerson()
    {
        return $this->hasOne(Person::className(), ['personID' => 'personID']);
    }
}
