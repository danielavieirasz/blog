<?php

use Phinx\Migration\AbstractMigration;

class CreateUserLoginsTable extends AbstractMigration
{
    public function change()
    {
        // create the table
        $table = $this->table('user_logins');
        $table->addColumn('user_id', 'integer')
              ->addColumn('created', 'datetime')
              ->create();
        if ($this->isMigratingUp()) {
            $table->insert([['user_id' => 1, 'created' => '2020-01-19 03:14:07']])
                  ->save();
        }
    }
}