<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Person;

/**
 * PerosnSearch represents the model behind the search form about `app\models\Person`.
 */
class PerosnSearch extends Person
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['personID'], 'integer'],
            [['title', 'firstName', 'lastName', 'dateOfBirth', 'gender', 'presentAddress', 'presentcity', 'parmanentAddress', 'oldcity', 'emailAddress', 'maritalStatus', 'mobileNo'], 'safe'],
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
        $query = Person::find();

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
            'personID' => $this->personID,
            'dateOfBirth' => $this->dateOfBirth,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'lastName', $this->lastName])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'presentAddress', $this->presentAddress])
            ->andFilterWhere(['like', 'presentcity', $this->presentcity])
            ->andFilterWhere(['like', 'parmanentAddress', $this->parmanentAddress])
            ->andFilterWhere(['like', 'oldcity', $this->oldcity])
            ->andFilterWhere(['like', 'emailAddress', $this->emailAddress])
            ->andFilterWhere(['like', 'maritalStatus', $this->maritalStatus])
            ->andFilterWhere(['like', 'mobileNo', $this->mobileNo]);

        return $dataProvider;
    }
}
