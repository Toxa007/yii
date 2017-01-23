<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170123_092257_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => 'pk',
            'email' => 'string NOT NULL',
            'password' => 'string NOT NULL',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
