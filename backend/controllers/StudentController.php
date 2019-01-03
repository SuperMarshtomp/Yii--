<?php

namespace backend\controllers;

use Yii;
use common\models\Student;
use common\models\StudentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use yii\filters\VerbFilter;

/**
 * StudentController implements the CRUD actions for Student model.
 */
class StudentController extends Controller
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
     * Lists all Student models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest){
            return $this->goHome();
        }
        $searchModel = new StudentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Student model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Student model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(!Yii:: $app->user->can('updateScore') || !Yii:: $app->user->can('addJudge') ||!Yii:: $app->user->can('deleteScore') ) {
            throw new ForbiddenHttpException('没有权限！');
        }
        $model = new Student();
        // $usermodel = new User();

        // $temp = Yii::$app->request->post();

        // if ($usermodel->load($temp) && $usermodel->save()) {
        // }

        // if ($model->load($temp)) {
        //     $model->user_id = $usermodel->id;
        //     if ($model->save()){
        //         return $this->redirect(['view', 'id' => $model->student_id]);
        //     }
        // }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->student_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Student model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if(!Yii:: $app->user->can('updateScore') ||!Yii:: $app->user->can('deleteScore') ) {
            throw new ForbiddenHttpException('没有权限！');
        }

        $model = $this->findModel($id);

        if(!Yii:: $app->user->can('updateScore')){
            throw new ForbiddenHttpException('没有权限！');
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->student_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Student model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(!Yii:: $app->user->can('updateScore') || !Yii:: $app->user->can('addJudge') ||!Yii:: $app->user->can('deleteScore') ) {
            throw new ForbiddenHttpException('没有权限！');
        }
        
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Student model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Student the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Student::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
