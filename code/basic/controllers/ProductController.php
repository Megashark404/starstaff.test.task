<?php

namespace app\controllers;

use app\models\Product;
use Yii;
use yii\data\Sort;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

class ProductController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Product::find()
            ->joinWith('tags')
            ->select(['products.*','MIN(tags.priority) as priority'])
            ->groupBy('products.name')
            ->orderBy('priority ASC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);

    }

}
