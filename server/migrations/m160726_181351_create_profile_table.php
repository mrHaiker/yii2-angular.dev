<?php

use yii\db\Migration;

/**
 * Handles the creation for table `profile`.
 */
class m160726_181351_create_profile_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('users', 'email');

        $this->createTable('profile', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'avatar' => $this->string(),
            'email' => $this->string(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'phone_number' => $this->string()
        ]);
        $this->addForeignKey(
            'profile:user_id',
            'profile',
            'user_id',
            'users',
            'id',
            'cascade',
            'cascade'
        );
        return true;
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('users', 'email', $this->string());
        $this->dropForeignKey('profile:user_id', 'profile');
        $this->dropTable('profile');
    }
}
