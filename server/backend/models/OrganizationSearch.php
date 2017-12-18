<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Organization;

/**
 * OrganizationSearch represents the model behind the search form about `app\models\Organization`.
 */
class OrganizationSearch extends Organization
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adress', 'city', 'contactNo', 'organizationName', 'emailAddress'], 'safe'],
            [['organizationID'], 'integer'],
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
        $query = Organization::find();

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
            'organizationID' => $this->organizationID,
        ]);

        $query->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'contactNo', $this->contactNo])
            ->andFilterWhere(['like', 'organizationName', $this->organizationName])
            ->andFilterWhere(['like', 'emailAddress', $this->emailAddress]);

        return $dataProvider;
    }
}
