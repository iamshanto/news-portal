<?php
namespace App\Console\Commands;

use App\Models\Category;

class ImportCategoryCommand extends BaseImportCommand
{
    protected $signature = 'import:category {path}';
    protected $description = 'Import categories from given local or remote path';
    public function __construct()
    {
        parent::__construct();
        $this->model = new Category;
    }
}
