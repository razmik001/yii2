<?php

use yii\db\Schema;
use yii\db\Migration;

class m150522_203313_create_goods_table extends Migration
{
    public function up()
    {
        $this->createTable('goods', [
            'id' => Schema::TYPE_PK,
            'order_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'price' => Schema::TYPE_DECIMAL . ' NOT NULL',
            'description' => Schema::TYPE_STRING . ' NOT NULL',
            'available' => Schema::TYPE_BOOLEAN . ' DEFAULT 0',
        ]);
    }

    public function down()
    {
        $this->dropTable('goods');
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
