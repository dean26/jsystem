<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GenerateEnginesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-engines-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        for ($i = 0; $i < 20; $i++){
            try {
                DB::beginTransaction();
                $name =  'Silnik ' . fake()->word();
                
                $engineId = DB::table('engines')->insertGetId([
                    'name' => $name,
                    'created_at'=> now(),
                    'updated_at' => now(),
                ]);

                DB::commit();
                $this->info('Dodano poprawnie!');
            } catch (\Exception $ex){
                DB::rollBack();
                $this->error("Wystapil blad. " . $ex->getMessage());
            }
        }
    }
}