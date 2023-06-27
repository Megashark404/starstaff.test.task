<?php

use yii\db\Migration;

/**
 * Class m230622_181751_create_table_tag_groups
 */
class m230622_181751_create_table_tag_groups extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tag_groups%}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'color' => $this->string(6)
        ]);

        $groups = ['Акции' => 'eb7134', 'Отделы' => '345beb', 'Инфо' => '34eb52'];
        foreach ($groups as $group => $color) {
            $this->db->createCommand()->insert('{{%tag_groups%}}', [
                'name' => $group,
                'color' => $color,
            ])->execute();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tag_groups%}}');
    }
}
