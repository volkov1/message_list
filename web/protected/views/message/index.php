<?php $this->widget('bootstrap.widgets.TbButton', array(
    'url'=> Yii::app()->createUrl('message/user', array('user_id' => 1)),
    'label'=>'Send message',
    'type'=>'success',
    'size'=>'null',
)); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'url'=> Yii::app()->createUrl('notice/user', array('user_id' => 1)),
    'label'=>'Send notice',
    'type'=>'success',
    'size'=>'null',
)); ?>