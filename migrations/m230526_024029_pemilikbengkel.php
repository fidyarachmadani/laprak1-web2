<?php

use yii\db\Migration;

/**
 * Class m230526_024029_pemilikbengkel
 */
class m230526_024029_pemilikbengkel extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pemilikbengkel}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'tgl_lahir'=> $this->date()->notNull(),
            'no_telp' => $this->integer(20)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230526_024029_pemilikbengkel cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230526_024029_pemilikbengkel cannot be reverted.\n";

        return false;
    }
    */
}
