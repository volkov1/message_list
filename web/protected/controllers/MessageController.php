<?php

class MessageController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        
        public function actionList()
        {
            $model = new Message('search');
            
            $model->unsetAttributes();
            
            if(isset($_GET['Message']))
            {
                $model->attributes = $_GET;
            }
            
            $this->render('list', array('m' => Message::model()->findAll()));
        }
}