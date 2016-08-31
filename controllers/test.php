namespace software75\yii2-ecommerce75\controllers;

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
			'behaviorLastActivity' => [
				'class' => behaviorLastActivity::className(),
			],
			'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
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
        die('grande!!');

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}
