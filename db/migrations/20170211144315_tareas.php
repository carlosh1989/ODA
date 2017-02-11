<?php

use Phinx\Migration\AbstractMigration;

class Tareas extends AbstractMigration
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
        $tareas = $this->table('tareas');
        $tareas->addColumn('usuario_id', 'integer')
              ->addColumn('titulo', 'string', array('limit' => 40))
              ->addColumn('body', 'text')
              ->addColumn('created_at', 'datetime')
              ->addColumn('updated_at', 'datetime', array('null' => true))
              ->addForeignKey('usuario_id', 'usuarios', 'id')
              ->save();
    }
}
