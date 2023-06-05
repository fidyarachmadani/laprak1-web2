<?php

use yii\db\Migration;

/**
 * Class m230530_071207_mahasiswa119
 */
class m230530_071207_mahasiswa119 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{mahasiswa119}}', [
            'id119' => $this->primaryKey(),
            'nim119' => $this->string(25)->notNull()->unique(),
            'nama119' => $this->string(255)->notNull(),
            'kelas119'=> $this->string(10)->notNull(),
            'status119' => $this->string(50)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230530_071207_mahasiswa119 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230530_071207_mahasiswa119 cannot be reverted.\n";

        return false;
    }
    */
}
