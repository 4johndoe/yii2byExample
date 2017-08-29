<?php

use yii\db\Migration;

class m170829_093301_init_customer_table extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'customer',
            [
                'id' => 'pk',
                'name' => 'string',
                'birth_date' => 'date',
                'notes' => 'text',
            ],
            'ENGINE=InnoDB'
        );
    }

    public function safeDown()
    {
        // echo "m170829_093301_init_customer_table cannot be reverted.\n";

        // return false;
        $this->dropTable('customer');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170829_093301_init_customer_table cannot be reverted.\n";

        return false;
    }
    */
}
