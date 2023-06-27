<?php

use yii\db\Migration;

/**
 * Class m230622_181635_create_table_products
 */
class m230622_181635_create_table_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products%}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()
        ]);

        $products = ['апельсины', 'бананы', 'картошка', 'кефир', 'кофе', 'лук', 'масло', 'молоко', 'мука', 'огурцы', 'перцы'];
        foreach ($products as $product) {
            $this->db->createCommand()->insert('{{%products%}}', [
                'name' => $product,
            ])->execute();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products%}}');
    }

}
