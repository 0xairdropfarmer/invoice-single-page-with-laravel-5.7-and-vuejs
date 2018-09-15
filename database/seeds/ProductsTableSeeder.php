
<?php
use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        foreach(range(1, 50) as $i) {
            Product::create([
                'item_code' => 'SK-100'.$i,
                'description' => 'Product '.$i,
                'unit_price' => mt_rand(200, 2000) 
                // สุ่มเลขระหว่าง    100 ถึง 1000
            ]);
        }
    }
}