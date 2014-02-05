<?php

Yii::import('bootstrap.widgets.TbGridView');

class MessageList extends TbGridView
{
     public $groupActions = array();
     
   public function init()

    {

//       array_unshift($this->columns, array(
//
//          'class'=>'CCheckBoxColumn',
//
////          'selectableRows'=>2,
//
////          'checkBoxHtmlOptions'=>array(
////
////          'name'=>'group-checkbox-column[]',
////
////          ),
////
////          'htmlOptions'=>array(
////
////             'class'=>'group-checkbox-column',
////
////          ),
//
//       ));

      return parent::init();

 }

//   public function renderPager()
//
//    {
//
//       echo "<div class='pre-header' style='float:left'>";
//
//       if(count($this->groupActions)) {
//
//          echo CHtml::dropDownList('group-actions', null, array(null=>null)+$this->groupActions, array());
//
//       }
//
//       echo CHtml::button('submit', array(
//
//          'id'=>'group-operation-submit',
//
//          'onclick'=>'groupOperation()',
//
//       ));
//
//       echo "</div>";
//
//      $actionLinks = array();
//
//       foreach($this->groupActions as $k=>$v) {
//
//          $actionLinks[$k] = Yii::app()->controller->createUrl($k);
//
//       }
//
//       $actionLinks = json_encode($actionLinks);
//
//      Yii::app()->clientScript->registerScript('go', "
//
//          var actionLinks = $actionLinks;
//
//          function groupOperation(){
//
//             var select = $('#group-actions');
//
//             var action = select.val();
//
//             var submit = $('#group-operation-submit');
//
//             submit.attr('disabled', 'disabled');
//
//             $.ajax({
//
//                url: actionLinks[action],
//
//                type: 'POST',
//
//                data: $('.group-checkbox-column input').serializeArray(),
//
//                complete: function(){
//
//                   submit.removeAttr('disabled');
//
//                },
//
//                success: function(){
//
//                   jQuery('#{$this->id}').yiiGridView('update');
//
//                }
//
//            });
//
//       }
//
//       ", CClientScript::POS_HEAD);
//
//       parent::renderPager();
//    }
}