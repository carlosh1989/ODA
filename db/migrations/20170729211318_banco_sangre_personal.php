<?php

use Phinx\Migration\AbstractMigration;

class BancoSangrePersonal extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $users = $this->table('banco_sangre_personal');
        $users->addColumn('laboratorio_id', 'integer', array('limit' => 11))
              ->addColumn('nombre', 'string', array('limit' => 50))
              ->addColumn('cedula', 'string', array('limit' => 50))
              ->addColumn('edad', 'integer', array('limit' => 3))
              ->addColumn('telefono_fijo', 'integer', array('limit' => 100))
              ->addColumn('telefono_celular', 'integer', array('limit' => 100))
              ->addColumn('cargo','string',array('limit'=>50))
              ->create();
    }
}
