<?php
namespace rjapi;

use rjapi\controllers\BaseCommand;

class ApiGenerator extends BaseCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:generate {inputFile} {--migrations} {--regenerate} {--merge=} {--no-history} {--tests}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'RAML-JSON-API PHP-code generator (based on RAML-types) for Laravel, with complete support of JSON-API data format';

    /**
     *  Laravel handler for console commands
     */
    public function handle()
    {
        $inputFile = $this->argument('inputFile');
        try {
            $this->actionIndex($inputFile);
        } catch (\Exception $e) {
            $this->info($e->getMessage());
            $this->error($e->getTraceAsString());
        }
    }
}