<?php 
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Article;

class ArticleController extends Controller
{

    public $layout = 'common';
    
    public function actionIndex()
    {
        $model = new Article;
        return $this->render('index', ['model' => $model]);
    }
}