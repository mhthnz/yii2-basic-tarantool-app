<?php

use mhthnz\tarantool\Migration;

/**
 * Class m230327_175031_add_test_user
 */
class m230327_175031_add_test_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->insert('users', [
            'username' => "test",
            'auth_key' => "2jnk3dk230dk23d",
            'password_hash' => \Yii::$app->getSecurity()->generatePasswordHash("test"),
            'access_token' => "m49fms9aj3nfkj3nf2",
            'email' => "test_email@gmail.com",
            'created_at' => time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->delete("users", ['username' => 'test']);
    }
}
