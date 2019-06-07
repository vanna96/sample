<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
class ProductDraft extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:draft';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update all product to draft';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $products = Product::where('status', 1)->get();
        if($products){
            foreach($products as $product){
                $product->update(['status' => 0]);
            }
        }
        return 'success';
    }
}
