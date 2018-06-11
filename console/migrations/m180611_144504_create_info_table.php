<?php

use yii\db\Migration;

/**
 * Handles the creation of table `info`.
 */
class m180611_144504_create_info_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('info', [
            'id' => $this->primaryKey(),
            'title' => $this->string(500),
            'text' => $this->text(),
            'type' => $this->integer(),
            'status' => $this->boolean(),
            'created_at' => $this->integer()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('info');
    }
}
