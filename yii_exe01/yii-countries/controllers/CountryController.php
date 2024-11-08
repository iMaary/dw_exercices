<?php
namespace app\controllers;

use app\models\Country;
use yii\web\Controller;

class CountryController extends Controller {
    public function actionList() {
        $countries = Country::find()->all();
        return $this->render("list", [
            'countries' => $countries
        ]);
    }
}
