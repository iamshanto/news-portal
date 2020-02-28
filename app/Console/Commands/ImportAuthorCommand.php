<?php
namespace App\Console\Commands;

use App\Models\Author;

class ImportAuthorCommand extends BaseImportCommand
{
    protected $signature = 'import:author {path}';
    protected $description = 'Import author from given local or remote path';
    public function __construct()
    {
        parent::__construct();
        $this->model = new Author;
    }
}
