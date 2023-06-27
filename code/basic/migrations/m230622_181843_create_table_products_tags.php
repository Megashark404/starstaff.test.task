<?php

use yii\db\Migration;

/**
 * Class m230622_181843_create_table_products_tags
 */
class m230622_181843_create_table_products_tags extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_tag_relation%}}', [
            'product_id' => $this->integer(),
            'tag_id' => $this->integer(),
        ]);

        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 1,
            'tag_id' => 1,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 1,
            'tag_id' => 5,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 2,
            'tag_id' => 5,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 3,
            'tag_id' => 2,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 3,
            'tag_id' => 5,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 3,
            'tag_id' => 6,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 4,
            'tag_id' => 3,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 5,
            'tag_id' => 1,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 5,
            'tag_id' => 2,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 5,
            'tag_id' => 4,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 5,
            'tag_id' => 6,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 6,
            'tag_id' => 5,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 7,
            'tag_id' => 1,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 7,
            'tag_id' => 3,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 8,
            'tag_id' => 3,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 8,
            'tag_id' => 7,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 9,
            'tag_id' => 4,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 10,
            'tag_id' => 1,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 10,
            'tag_id' => 2,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 10,
            'tag_id' => 6,
        ])->execute();
        $this->db->createCommand()->insert('{{%product_tag_relation%}}', [
            'product_id' => 11,
            'tag_id' => 5,
        ])->execute();

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_tag_relation%}}');
    }

}
