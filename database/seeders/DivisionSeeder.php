<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id'=>1,'bn_name' => 'চট্টগ্রাম', 'country_id' => 1, 'name' => 'Chattogram'],
            ['id'=>2,'bn_name' => 'রাজশাহী', 'country_id' => 1, 'name' => 'Rajshahi'],
            ['id'=>3,'bn_name' => 'খুলনা', 'country_id' => 1, 'name' => 'Khulna'],
            ['id'=>4,'bn_name' => 'বরিশাল', 'country_id' => 1, 'name' => 'Barishal'],
            ['id'=>5,'bn_name' => 'সিলেট', 'country_id' => 1, 'name' => 'Sylhet'],
            ['id'=>6,'bn_name' => 'ঢাকা', 'country_id' => 1, 'name' => 'Dhaka'],
            ['id'=>7,'bn_name' => 'রংপুর', 'country_id' => 1, 'name' => 'Rangpur'],
            ['id'=>8,'bn_name' => 'ময়মনসিংহ', 'country_id' => 1, 'name' => 'Mymensingh'],
        ];

        \DB::table('divisions')->insert($data);
    }
}
