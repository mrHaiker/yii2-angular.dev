<?php

use yii\db\Migration;

class m160721_200749_edit_film_column extends Migration
{
    public function up()
    {
        $this->dropColumn('film', 'tear');

        $this->addColumn('film', 'year', $this->integer(4));
    }

    public function down()
    {
        return false;
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
