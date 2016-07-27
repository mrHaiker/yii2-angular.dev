<?php

use yii\db\Migration;

/**
 * Handles the creation for table `users`.
 */
class m160726_181006_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'email' => $this->string(),
            'username' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
            'access_key' => $this->string(),
            'last_access' => $this->dateTime(),
            'created_at' => $this->dateTime()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
