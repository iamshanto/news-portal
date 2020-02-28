<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BaseImportCommand extends Command
{
    protected $model = '';
    public function handle()
    {
        $content = file_get_contents($this->argument('path'));
        $contents = json_decode($content, true);

        $progress = $this->output->createProgressBar(count($contents));
        foreach ($contents as $content) {
            try {
                if (!empty($content['password'])) {
                    $content['password'] = app('hash')->make($content['password']);
                }
                $this->model->updateOrCreate($content);
            } catch (\Exception $e) {
                switch ($e->getCode()) {
                    case 23000:
                        $this->error('Duplicate Entry: ' . $content[array_keys($content)[0]]); break;
                    default:
                        $this->error($e->getMessage());
                }
            }

            $progress->advance();
            sleep(1);
        }
        $progress->finish();
    }
}
