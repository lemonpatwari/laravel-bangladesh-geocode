<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => 1, 'bn_name' => 'চট্টগ্রাম', 'country_id' => 1, 'name' => 'Chattogram'],
            ['id' => 2, 'bn_name' => 'রাজশাহী', 'country_id' => 1, 'name' => 'Rajshahi'],
            ['id' => 3, 'bn_name' => 'খুলনা', 'country_id' => 1, 'name' => 'Khulna'],
            ['id' => 4, 'bn_name' => 'বরিশাল', 'country_id' => 1, 'name' => 'Barishal'],
            ['id' => 5, 'bn_name' => 'সিলেট', 'country_id' => 1, 'name' => 'Sylhet'],
            ['id' => 6, 'bn_name' => 'ঢাকা', 'country_id' => 1, 'name' => 'Dhaka'],
            ['id' => 7, 'bn_name' => 'রংপুর', 'country_id' => 1, 'name' => 'Rangpur'],
            ['id' => 8, 'bn_name' => 'ময়মনসিংহ', 'country_id' => 1, 'name' => 'Mymensingh'],
        ];

        try {
            DB::beginTransaction();

            DB::table('divisions')->truncate(); // optional if you want to reset
            DB::statement('ALTER TABLE divisions AUTO_INCREMENT = 1');

            DB::table('divisions')->insert($data);

            DB::commit();
            $this->command->info('Divisions seeded successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Division seeder failed: ' . $e->getMessage());
            $this->command->error('Failed to seed divisions: ' . $e->getMessage());
        }
    }
}