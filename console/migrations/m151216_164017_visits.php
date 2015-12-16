<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_164017_visits extends Migration
{
    public function up()
    {
        $this->createTable('visits', [
            'id' => $this->primaryKey(),
            'doctor_id' => $this->integer()->notNull(),
            'client_id' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('visits');
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
