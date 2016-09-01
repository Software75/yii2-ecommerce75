<?php

use yii\db\Schema;
use yii\db\Migration;

class m160901_143712_Mass extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';
        $transaction=$this->db->beginTransaction();
        try{
             $this->createTable('{{%ecom_products}}',[
               'id'=> $this->primaryKey(11),
               'code'=> $this->string(100)->notNull(),
               'description'=> $this->string(500)->null()->defaultValue(null),
               'id_um'=> $this->integer(11)->notNull(),
               'id_type'=> $this->integer(11)->null()->defaultValue(null),
            ], $tableOptions);
            $this->createIndex('idProductsUm','{{%ecom_products}}','id_um',true);
            $this->createIndex('idProductType','{{%ecom_products}}','id_type',true);
            $this->addForeignKey('fk_ecom_products_id_type','{{%ecom_products}}','id_type','ecom_product_type''id');
            $this->addForeignKey('fk_ecom_products_id_um','{{%ecom_products}}','id_um','ecom_um''id');
            $transaction->commit();
        } catch (Exception $e) {
             echo 'Catch Exception '.$e->getMessage().' and rollBack this';
             $transaction->rollBack();
        }
    }

    public function safeDown()
    {
        $transaction=$this->db->beginTransaction();
        try{
            $this->dropForeignKey('fk_ecom_products_id_type', '{{%ecom_products}}');
            $this->dropForeignKey('fk_ecom_products_id_um', '{{%ecom_products}}');
            $this->dropTable('{{%ecom_products}}');
            $transaction->commit();
        } catch (Exception $e) {
            echo 'Catch Exception '.$e->getMessage().' and rollBack this';
            $transaction->rollBack();
        }
    }
}
