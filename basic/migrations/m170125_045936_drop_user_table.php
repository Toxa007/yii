<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `user`.
 */
class m170125_045936_drop_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->dropTable('post');
        $this->dropTable('user');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
        ]);
    }
}
