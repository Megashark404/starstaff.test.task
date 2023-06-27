<?php

use yii\db\Migration;

/**
 * Class m230622_181732_create_table_tags
 */
class m230622_181732_create_table_tags extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tags%}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'priority' => $this->integer(4),
            'group_id' => $this->integer(4)
        ]);

        $this->db->createCommand()->insert('{{%tags%}}', [
            'name' => 'Скидка',
            'priority' => 1,
            'group_id' => 1
        ])->execute();

        $this->db->createCommand()->insert('{{%tags%}}', [
            'name' => 'Кэщбек 10%',
            'priority' => 2,
            'group_id' => 1
        ])->execute();

        $this->db->createCommand()->insert('{{%tags%}}', [
            'name' => 'Молоко',
            'priority' => 3,
            'group_id' => 2
        ])->execute();

        $this->db->createCommand()->insert('{{%tags%}}', [
            'name' => 'Бакалея',
            'priority' => 4,
            'group_id' => 2
        ])->execute();

        $this->db->createCommand()->insert('{{%tags%}}', [
            'name' => 'Овощи-фрукты',
            'priority' => 5,
            'group_id' => 2
        ])->execute();

        $this->db->createCommand()->insert('{{%tags%}}', [
            'name' => 'Эко',
            'priority' => 6,
            'group_id' => 3
        ])->execute();

        $this->db->createCommand()->insert('{{%tags%}}', [
            'name' => 'Для детей',
            'priority' => 7,
            'group_id' => 3
        ])->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tags%}}');
    }

}
