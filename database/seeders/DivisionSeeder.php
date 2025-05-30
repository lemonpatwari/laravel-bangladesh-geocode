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
            ['id' => 1, 'bn_name' => 'চট্টগ্রাম', 'country_id' => 1, 'name' => 'Chattogram', 'latitude' => 22.3569, 'longitude' => 91.7832, 'url' => 'chattogram.gov.bd'],
            ['id' => 2, 'bn_name' => 'রাজশাহী', 'country_id' => 1, 'name' => 'Rajshahi', 'latitude' => 24.3745, 'longitude' => 88.6042, 'url' => 'rajshahi.gov.bd'],
            ['id' => 3, 'bn_name' => 'খুলনা', 'country_id' => 1, 'name' => 'Khulna', 'latitude' => 22.8456, 'longitude' => 89.5403, 'url' => 'khulna.gov.bd'],
            ['id' => 4, 'bn_name' => 'বরিশাল', 'country_id' => 1, 'name' => 'Barishal', 'latitude' => 22.7010, 'longitude' => 90.3535, 'url' => 'barishal.gov.bd'],
            ['id' => 5, 'bn_name' => 'সিলেট', 'country_id' => 1, 'name' => 'Sylhet', 'latitude' => 24.8949, 'longitude' => 91.8687, 'url' => 'sylhet.gov.bd'],
            ['id' => 6, 'bn_name' => 'ঢাকা', 'country_id' => 1, 'name' => 'Dhaka', 'latitude' => 23.8103, 'longitude' => 90.4125, 'url' => 'dhaka.gov.bd'],
            ['id' => 7, 'bn_name' => 'রংপুর', 'country_id' => 1, 'name' => 'Rangpur', 'latitude' => 25.7439, 'longitude' => 89.2752, 'url' => 'rangpur.gov.bd'],
            ['id' => 8, 'bn_name' => 'ময়মনসিংহ', 'country_id' => 1, 'name' => 'Mymensingh', 'latitude' => 24.7471, 'longitude' => 90.4203, 'url' => 'mymensingh.gov.bd'],
        ];



        try {
            // Truncate and reset if necessary
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            DB::table('divisions')->truncate();
            DB::statement('ALTER TABLE divisions AUTO_INCREMENT = 1');
            DB::statement('SET FOREIGN_KEY_CHECKS=1');

            DB::beginTransaction();
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