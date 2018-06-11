<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contact`.
 */
class m180611_160321_create_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'address' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contact');
    }
}
