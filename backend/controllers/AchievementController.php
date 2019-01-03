<?php

namespace backend\controllers;

use Yii;
use common\models\Achievement;
use common\models\AchievementSearch;
use common\models\Student;
use common\models\Teacher;
use common\models\TeacherSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
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
        if (Yii::$app->user->isGuest){
            return $this->goHome();
        }
        $searchModel = new AchievementSearch();
        $terModel = new TeacherSearch();
        $ter_id = $terModel->getter_id(Yii::$app->user->id);
        if ($ter_id != null){
            $dataProvider = $searchModel->tersearch(Yii::$app->request->queryParams,$ter_id);
        }
        else {
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Achievement model.
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
     * Creates a new Achievement model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(!Yii:: $app->user->can('updateScore') || !Yii:: $app->user->can('addJudge') ||!Yii:: $app->user->can('deleteScore') ) {
            throw new ForbiddenHttpException('没有权限！');
        }

        $model = new Achievement();
        if ($post = Yii::$app->request->post()){
            $stuquery = Student::find()->indexBy('student_id')->all();
            $terquery = Teacher::find()->indexBy('teacher_id')->all();
            

            foreach($stuquery as $key=>$stu)
            {
                foreach($terquery as $key=>$ter){
                    $model = new Achievement();
                    $model->student_id = $stu->student_id;
                    $model->teacher_id = $ter->teacher_id;
                    // $model->student_id = 201800001;
                    // $model->teacher_id = 1003;
                    $model->load($post);
                    $model->save();
                }
            }
            return $this->redirect(['index']);
        }

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     //$model->update_time = time();
        //     return $this->redirect(['view', 'id' => $model->id]);
        // }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    // public function actionCreateExam()
    // {
    //     $model = new Achievement();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }

    //     return $this->render('createexam', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Updates an existing Achievement model.
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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Achievement model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(!Yii:: $app->user->can('updateScore') ||!Yii:: $app->user->can('deleteScore')) {
            throw new ForbiddenHttpException('没有权限！');
        }

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Achievement model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Achievement the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Achievement::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
