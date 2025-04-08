<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GenerateOrdersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-orders-command';

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
                $product_name =  'Produkt ' . fake()->word();
                $quantity = rand(1, 5);
                $price = rand(10, 1000);
                
                $orderId = DB::table('orders')->insertGetId([
                    'product_name' => $product_name,
                    'quantity' => $quantity,
                    'price' => $price,
                    'created_at'=> now(),
                    'updated_at' => now(),
                ]);

                DB::table('payments')->insertGetId([
                    'order_id' => $orderId,
                    'status' => 'Paid',
                    'amount' => $price + 1.23,
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
