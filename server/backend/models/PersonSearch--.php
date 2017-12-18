<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Person;

/**
 * PersonSearch represents the model behind the search form about `app\models\Person`.
 */
class PersonSearch extends Person
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['personID', 'ex_per_image'], 'integer'],
            [['per_firstName', 'per_middleName', 'per_lastName', 'per_dateOfBirth', 'per_bloodGroup', 'per_title', 'per_gender', 'per_maritalStatus', 'per_nationality', 'per_fathersName', 'per_mothersName', 'per_spouseName', 'per_permanentAddress', 'per_city', 'per_postCode', 'per_telephone', 'per_mobileOne', 'per_mobileTwo', 'per_email', 'per_presentAddress', 'per_computerLiteracy', 'per_otherActivities', 'per_nationalID', 'per_entryDate'], 'safe'],
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
            'per_dateOfBirth' => $this->per_dateOfBirth,
            'per_entryDate' => $this->per_entryDate,
            'ex_per_image' => $this->ex_per_image,
        ]);

        $query->andFilterWhere(['like', 'per_firstName', $this->per_firstName])
            ->andFilterWhere(['like', 'per_middleName', $this->per_middleName])
            ->andFilterWhere(['like', 'per_lastName', $this->per_lastName])
            ->andFilterWhere(['like', 'per_bloodGroup', $this->per_bloodGroup])
            ->andFilterWhere(['like', 'per_title', $this->per_title])
            ->andFilterWhere(['like', 'per_gender', $this->per_gender])
            ->andFilterWhere(['like', 'per_maritalStatus', $this->per_maritalStatus])
            ->andFilterWhere(['like', 'per_nationality', $this->per_nationality])
            ->andFilterWhere(['like', 'per_fathersName', $this->per_fathersName])
            ->andFilterWhere(['like', 'per_mothersName', $this->per_mothersName])
            ->andFilterWhere(['like', 'per_spouseName', $this->per_spouseName])
            ->andFilterWhere(['like', 'per_permanentAddress', $this->per_permanentAddress])
            ->andFilterWhere(['like', 'per_city', $this->per_city])
            ->andFilterWhere(['like', 'per_postCode', $this->per_postCode])
            ->andFilterWhere(['like', 'per_telephone', $this->per_telephone])
            ->andFilterWhere(['like', 'per_mobileOne', $this->per_mobileOne])
            ->andFilterWhere(['like', 'per_mobileTwo', $this->per_mobileTwo])
            ->andFilterWhere(['like', 'per_email', $this->per_email])
            ->andFilterWhere(['like', 'per_presentAddress', $this->per_presentAddress])
            ->andFilterWhere(['like', 'per_computerLiteracy', $this->per_computerLiteracy])
            ->andFilterWhere(['like', 'per_otherActivities', $this->per_otherActivities])
            ->andFilterWhere(['like', 'per_nationalID', $this->per_nationalID]);

        return $dataProvider;
    }
}
