<?php

class m140204_150926_message extends CDbMigration
{
//	public function up()
//	{
//	}
//
//	public function down()
//	{
//		echo "m140204_150926_message does not support migration down.\n";
//		return false;
//	}

 
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
            $this->createTable('{{message}}', array(
               'id' =>  'pk',
               'sender' => 'string',
               'recipient' => 'string',
               'date' => 'date',
               'id_notice' => 'boolean default false',
               'text' => 'text',
               'opened' => 'boolean default false',
               'sender_del' => 'boolean default false',
               'recipient_del' => 'boolean default false',
               'aspm_lock' => 'boolean default false',
               'aspm_mark' => 'integer default 0',
               'is_spam' => 'boolean default false'
            ));
	}

	public function safeDown()
	{
            $this->dropTable('{{message}}');
	}
}