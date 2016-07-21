<?php

use yii\db\Migration;

class m160721_200242_table extends Migration
{
    public function up()
    {
        $this->createTable('film', [
            'id' => $this->integer(11),
            'title' => $this->string(255),
            'storyline' => $this->string(),
            'director' => $this->string(100),
            'tear' => $this->integer(4)
        ]);
    }

    public function down()
    {
        $this->dropTable('film');
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
