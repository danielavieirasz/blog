<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableUsers extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('users', ['signed'=>false]);
        $table
        ->addColumn('name', 'string')
        ->addColumn('email', 'string')
        ->addColumn('password', 'string')
        ->addColumn('created_at', 'timestamp')
        ->create();
    }
}
