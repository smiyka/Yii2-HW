<?php

use yii\db\Schema;
use yii\db\Migration;

class m151130_100041_doctors extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('doctor', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_TEXT . ' NOT NULL',
            'email' => Schema::TYPE_STRING,
            'phone' => Schema::TYPE_TEXT,
            'fb_url' => Schema::TYPE_TEXT,
            'doctor' => Schema::TYPE_TEXT,
            'insurance' => Schema::TYPE_BOOLEAN,
            'first_visit' => Schema::TYPE_BOOLEAN,
            'image' => Schema::TYPE_STRING,
            'comment' => Schema::TYPE_TEXT,
            'status' => Schema::TYPE_STRING . ' NOT NULL',
        ], $tableOptions);

        $this->createIndex('idx_user_username', '{{%user}}', 'username');
        $this->createIndex('idx_user_email', '{{%user}}', 'email');
        $this->createIndex('idx_user_status', '{{%user}}', 'status');
    }

    public function down()
    {
        echo "m151130_100041_doctors cannot be reverted.\n";
        return false;
        $this->dropTable('doctor');
    }

}