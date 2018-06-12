<?php

use yii\db\Migration;

/**
 * Handles adding filepath to table `info`.
 */
class m180612_133725_add_filepath_column_to_info_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('info', 'filepath', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('info', 'filepath');
    }
}
