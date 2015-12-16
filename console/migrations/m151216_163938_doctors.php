<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_163938_doctors extends Migration
{
    public function up()
    {
        $this->createTable('doctors', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);

        $this->insert('doctors', [
            'name' => 'Terapevt'
        ]);

        $this->insert('doctors', [
            'name' => 'LOR'
        ]);

        $this->insert('doctors', [
            'name' => 'Proktolog'
        ]);
    }

    public function down()
    {
        $this->dropTable('doctors');
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
