<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Posts extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('posts', ['signed'=>false]);
        $table->addColumn('title', 'string')
        ->addColumn('slug', 'string')
        ->addColumn('content', 'text')
        ->addColumn('created_at', 'timestamp')
        ->create();        
    }
}