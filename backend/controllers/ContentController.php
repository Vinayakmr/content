<?php

namespace backend\controllers;

use Yii;
use backend\models\Content;
use backend\models\ContentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ContentController implements the CRUD actions for Content model.
 */
class ContentController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
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
     * Lists all Content models.
     * @return mixed
     */
    public function actionIndex() {

        if (Yii::$app->user->getIsGuest()) {
            Yii::$app->session->setFlash('login', 'Please login as administrator gain access.');
            return $this->redirect(['/site/login']);
        }

        $searchModel = new ContentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Content model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {

        if (Yii::$app->user->getIsGuest()) {
            Yii::$app->session->setFlash('login', 'Please login as administrator gain access.');
            return $this->redirect(['/site/login']);
        }


        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Content model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {


        if (Yii::$app->user->getIsGuest()) {
            Yii::$app->session->setFlash('login', 'Please login as administrator gain access.');
            return $this->redirect(['/site/login']);
        }

        $model = new Content();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Content model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {

        if (Yii::$app->user->getIsGuest()) {
            Yii::$app->session->setFlash('login', 'Please login as administrator gain access.');
            return $this->redirect(['/site/login']);
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
     * Deletes an existing Content model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {

        if (Yii::$app->user->getIsGuest()) {
            Yii::$app->session->setFlash('login', 'Please login as administrator gain access.');
            return $this->redirect(['/site/login']);
        }

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Content model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Content the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {

        if (Yii::$app->user->getIsGuest()) {
            Yii::$app->session->setFlash('login', 'Please login as administrator gain access.');
            return $this->redirect(['/site/login']);
        }

        if (($model = Content::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
