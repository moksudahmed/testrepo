<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employees;

/**
 * EmployeesSearch represents the model behind the search form about `app\models\Employees`.
 */
class EmployeesSearch extends Employees
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employeeid'], 'integer'],
            [['emp_joiningDate', 'emp_leaveDate',  'emp_computerLiteracy', 'emp_otherActivities', 'emp_personalStatment', 'emp_convictionDetails', 'emp_passportNo', 'emp_drivingLicenseNo'], 'safe'],
            [['ex_emp_active', 'emp_criminalConviction'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Employees::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'employeeid' => $this->employeeid,
            'emp_joiningDate' => $this->emp_joiningDate,
            'emp_leaveDate' => $this->emp_leaveDate,
            'ex_emp_active' => $this->ex_emp_active,
            'emp_criminalConviction' => $this->emp_criminalConviction,
        ]);

        $query->andFilterWhere(['like', 'emp_computerLiteracy', $this->emp_computerLiteracy])
            ->andFilterWhere(['like', 'emp_otherActivities', $this->emp_otherActivities])
            ->andFilterWhere(['like', 'emp_personalStatment', $this->emp_personalStatment])
            ->andFilterWhere(['like', 'emp_convictionDetails', $this->emp_convictionDetails])
            ->andFilterWhere(['like', 'emp_passportNo', $this->emp_passportNo])
            ->andFilterWhere(['like', 'emp_drivingLicenseNo', $this->emp_drivingLicenseNo]);

        return $dataProvider;
    }
}
