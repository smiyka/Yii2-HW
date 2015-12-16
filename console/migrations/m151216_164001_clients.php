<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_164001_clients extends Migration
{
    public function up()
    {
        $this->createTable('clients', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'facebook_url' => $this->string(),
            'insurance' => $this->boolean()->defaultValue(false),
            'first_visit' => $this->boolean()->defaultValue(false),
            'comment' => $this->text(),
            'image' => $this->string(),
        ]);
    }

    public function down()
    {
        $this->dropTable('clients');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
