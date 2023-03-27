<?php

use mhthnz\tarantool\Migration;

/**
 * Class m230327_170137_create_user_table
 */
class m230327_170137_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->unique(),
            'auth_key' => $this->string(),
            'password_hash' => $this->string(),
            'access_token' => $this->string(),
            'email' => $this->string()->unique(),
            'created_at' => $this->integer()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable("users");
    }
}
