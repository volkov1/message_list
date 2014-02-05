<?php
//var_dump($model);

$dataProvider=new CActiveDataProvider('Message');

$this->widget('ListMessage', array(
    'type'=>'striped bordered condensed hover',
    'dataProvider'=>$dataProvider,
    'filter' => $m,
    'template'=>"{items}",
    'columns'=>array(
        array(
            'id'=>'autoId',
            'class'=>'CCheckBoxColumn',
            'selectableRows' => '50',   
        ),
        
//        array(
//        'header' => 'test',
//        'value' => '"testtest"', 
//    ),
//        array('name'=>'id', 'header'=>'#'),
        array('name'=>'sender', 'header'=>'Отправитель', 'value'=> '"' . 'name and date' . '"'),
//data
        array('name'=>'text', 'header'=>'Заголовок сообщения'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));