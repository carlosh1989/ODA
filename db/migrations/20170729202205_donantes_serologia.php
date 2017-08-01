<?php

use Phinx\Migration\AbstractMigration;

class DonantesSerologia extends AbstractMigration
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
        $users = $this->table('donantes_serologia');
        $users->addColumn('donante_id', 'integer', array('limit' => 11))
              ->addColumn('responsable', 'string', array('limit' => 50))
              ->addColumn('VIH', 'string', array('limit' => 50))
              ->addColumn('HBSAG', 'string', array('limit' => 50))
              ->addColumn('ANTIVHC', 'string', array('limit' => 50))
              ->create();
    }
}
