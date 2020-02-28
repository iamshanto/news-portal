<?php
namespace App\Console\Commands;

use App\Models\Customer;

class ImportCustomerCommand extends BaseImportCommand
{
    protected $signature = 'import:customer {path}';
    protected $description = 'Import customer from given local or remote path';
    public function __construct()
    {
        parent::__construct();
        $this->model = new Customer;
    }
}
