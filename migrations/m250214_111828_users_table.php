<?php

use yii\db\Migration;

class m250214_111828_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'username' => $this->string(50)->notNull(),
            'role' => $this->string()->notNull(),
            'address' => $this->string(50)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250214_111828_users_table cannot be reverted.\n";

        return false;
    }
    */
}
