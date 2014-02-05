<?php

class TestController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }
    
    public function actionTest()
    {
        echo 1;
    }
}