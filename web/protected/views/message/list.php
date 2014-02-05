<?php
$dataProvider=new CActiveDataProvider('Message');
//echo CHtml::link('test', array("user/view", array("id"=>$data->id)));
//$this->widget('bootstrap.widgets.TbGridView', array(


$this->widget('MessageList', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
        array(
            'id'=>'autoId',
            'class'=>'CCheckBoxColumn',
            'selectableRows' => '50',
        ),

//        array('name'=>'sender', 'header'=>'Отправитель', 'value'=> '$data->sender ." ". $data->date. " " .CHtml::image("")'),
        array('name' => 'sender', 'header' => 'Отправитель', 'type'=>'html','value'=> 'CHtml::image("/images/img.jpg") .
            CHtml::link(Chtml::encode($data->sender), array("/user/view/", "id"=>$data->id)) . " " . $data->date'),
//data
        array('name'=>'text', 'header'=>'Заголовок сообщения', 'value'=> 'substr($data->text, 0, 145)'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{view_} {delete_} {spam}',
            'buttons' => array(
                'view_' => array(
                    'label' => 'Просмотр',
                    'url' => 'Yii::app()->createAbsoluteUrl("/message/view", array("id"=>$data->id))',
                ),
                'delete_' => array(
                    'label' => 'Удалить',
                    'url' => 'Yii::app()->createAbsoluteUrl("/message/delete", array("id"=>$data->id))',
                ),
                'spam' => array(
                    'label' => 'Это спам',
                    'url' => 'Yii::app()->createAbsoluteUrl("/message/spam", array("id"=>$data->id))',
                ),
            ),
        ),
    ),
));