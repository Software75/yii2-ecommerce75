<?php
namespace software75\ecommerce\controllers;

use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;

/**
 * ContrattiController implements the CRUD actions for G75DocumentiContratti model.
 */
class TestController extends Controller
{
    public function behaviors()
    {
        return [
			'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all G75DocumentiContratti models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index', [
            'model' => 'ok',
        ]);
    }
}
