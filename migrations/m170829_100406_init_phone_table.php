<?php

use yii\db\Migration;

class m170829_100406_init_phone_table extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'phone',
            [
                'id' => 'pk',
                'customer_id' => 'int unique',
                'number' => 'string',
            ],
            'ENGINE=InnoDB'
        );

        $this->addForeignKey('customer_phone_nubmers', 'phone', 'customer_id', 'customer', 'id');
    }

    public function safeDown()
    {
        // echo "m170829_100406_init_phone_table cannot be reverted.\n";

        // return false;
        $this->dropForeignKey('customer_phone_nubmers', 'phone');
        $this->dropTable('phone');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170829_100406_init_phone_table cannot be reverted.\n";

        return false;
    }
    */
}
