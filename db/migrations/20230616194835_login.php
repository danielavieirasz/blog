<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Login extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('login', ['signed'=>false]);
        $table
        ->addColumn('email', 'string')
        ->addColumn('password', 'string')
        ->create();
    }
}
