<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%page}}`.
 */
class m190204_194946_create_page_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('{{%page}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'content' => $this->text(),
            'img' => $this->string(),
            'description' => $this->string(),
            'keywords' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('{{%page}}');
    }

}
