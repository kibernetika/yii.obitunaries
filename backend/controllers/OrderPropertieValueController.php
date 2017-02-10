<?php

namespace backend\controllers;

use Yii;
use common\models\OrderPropertieValue;
use backend\models\OrderPropertieValueSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderPropertieValueController implements the CRUD actions for OrderPropertieValue model.
 */
class OrderPropertieValueController extends BaseAdminController
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
     * Lists all OrderPropertieValue models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrderPropertieValueSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OrderPropertieValue model.
     * @param integer $id_property_value
     * @param integer $id_order_item
     * @return mixed
     */
    public function actionView($id_property_value, $id_order_item)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_property_value, $id_order_item),
        ]);
    }

    /**
     * Creates a new OrderPropertieValue model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OrderPropertieValue();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_property_value' => $model->id_property_value, 'id_order_item' => $model->id_order_item]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing OrderPropertieValue model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_property_value
     * @param integer $id_order_item
     * @return mixed
     */
    public function actionUpdate($id_property_value, $id_order_item)
    {
        $model = $this->findModel($id_property_value, $id_order_item);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_property_value' => $model->id_property_value, 'id_order_item' => $model->id_order_item]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing OrderPropertieValue model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_property_value
     * @param integer $id_order_item
     * @return mixed
     */
    public function actionDelete($id_property_value, $id_order_item)
    {
        $this->findModel($id_property_value, $id_order_item)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OrderPropertieValue model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_property_value
     * @param integer $id_order_item
     * @return OrderPropertieValue the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_property_value, $id_order_item)
    {
        if (($model = OrderPropertieValue::findOne(['id_property_value' => $id_property_value, 'id_order_item' => $id_order_item])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
