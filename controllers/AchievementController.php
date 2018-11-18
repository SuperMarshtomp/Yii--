<?php

namespace backend\controllers;

use Yii;
use common\models\Achievement;
use common\models\AchievementSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AchievementController implements the CRUD actions for Achievement model.
 */
class AchievementController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Achievement models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AchievementSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Achievement model.
     * @param string $subject
     * @param integer $student_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($subject, $student_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($subject, $student_id),
        ]);
    }

    /**
     * Creates a new Achievement model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Achievement();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'subject' => $model->subject, 'student_id' => $model->student_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Achievement model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $subject
     * @param integer $student_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($subject, $student_id)
    {
        $model = $this->findModel($subject, $student_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'subject' => $model->subject, 'student_id' => $model->student_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Achievement model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $subject
     * @param integer $student_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($subject, $student_id)
    {
        $this->findModel($subject, $student_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Achievement model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $subject
     * @param integer $student_id
     * @return Achievement the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($subject, $student_id)
    {
        if (($model = Achievement::findOne(['subject' => $subject, 'student_id' => $student_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
