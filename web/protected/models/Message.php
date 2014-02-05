<?php

/**
 * This is the model class for table "{{message}}".
 *
 * The followings are the available columns in table '{{message}}':
 * @property integer $id
 * @property string $sender
 * @property string $recipient
 * @property string $date
 * @property boolean $id_notice
 * @property string $text
 * @property boolean $opened
 * @property boolean $sender_del
 * @property boolean $recipient_del
 * @property boolean $aspm_lock
 * @property integer $aspm_mark
 * @property boolean $is_spam
 */
class Message extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{message}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('aspm_mark', 'numerical', 'integerOnly'=>true),
			array('sender, recipient', 'length', 'max'=>255),
			array('date, id_notice, text, opened, sender_del, recipient_del, aspm_lock, is_spam', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, sender, recipient, date, id_notice, text, opened, sender_del, recipient_del, aspm_lock, aspm_mark, is_spam', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('sender',$this->sender,true);
		$criteria->compare('recipient',$this->recipient,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('id_notice',$this->id_notice);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('opened',$this->opened);
		$criteria->compare('sender_del',$this->sender_del);
		$criteria->compare('recipient_del',$this->recipient_del);
		$criteria->compare('aspm_lock',$this->aspm_lock);
		$criteria->compare('aspm_mark',$this->aspm_mark);
		$criteria->compare('is_spam',$this->is_spam);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Message the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
