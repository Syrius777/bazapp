<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category_product}}`.
 */
class m210331_090437_create_category_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category_product}}', [
            'id' => $this->primaryKey(),
            'category_id'=>$this->integer(),
            'product_id'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category_product}}');
    }
}
