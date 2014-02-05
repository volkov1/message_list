<?php

class m140204_163125_user extends CDbMigration
{
    // Use safeUp/safeDown to do migration with transaction
    public function safeUp()
    {
        $this->createTable('{{user}}', array(
            'id' => 'pk',
            'login' => 'string',
            'pswd' => 'string',
            'email' => 'string',
        ));
    }

    public function safeDown()
    {
        $this->dropTable('{{user}}');
    }
}