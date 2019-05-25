<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m190202_133234_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'content' => $this->text(),
            'img' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('{{%service}}');
    }
}
