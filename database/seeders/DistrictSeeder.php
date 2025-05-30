<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            ['id' => '1', 'division_id' => '1', 'name' => 'Comilla', 'bn_name' => 'কুমিল্লা', 'latitude' => '23.4682747', 'longitude' => '91.1788135', 'url' => 'www.comilla.gov.bd'],
            ['id' => '2', 'division_id' => '1', 'name' => 'Feni', 'bn_name' => 'ফেনী', 'latitude' => '23.023231', 'longitude' => '91.3840844', 'url' => 'www.feni.gov.bd'],
            ['id' => '3', 'division_id' => '1', 'name' => 'Brahmanbaria', 'bn_name' => 'ব্রাহ্মণবাড়িয়া', 'latitude' => '23.9570904', 'longitude' => '91.1119286', 'url' => 'www.brahmanbaria.gov.bd'],
            ['id' => '4', 'division_id' => '1', 'name' => 'Rangamati', 'bn_name' => 'রাঙ্গামাটি', 'latitude' => '22.6175', 'longitude' => '92.1422', 'url' => 'www.rangamati.gov.bd'],
            ['id' => '5', 'division_id' => '1', 'name' => 'Noakhali', 'bn_name' => 'নোয়াখালী', 'latitude' => '22.869563', 'longitude' => '91.099398', 'url' => 'www.noakhali.gov.bd'],
            ['id' => '6', 'division_id' => '1', 'name' => 'Chandpur', 'bn_name' => 'চাঁদপুর', 'latitude' => '23.2332585', 'longitude' => '90.6712912', 'url' => 'www.chandpur.gov.bd'],
            ['id' => '7', 'division_id' => '1', 'name' => 'Lakshmipur', 'bn_name' => 'লক্ষ্মীপুর', 'latitude' => '22.942477', 'longitude' => '90.841184', 'url' => 'www.lakshmipur.gov.bd'],
            ['id' => '8', 'division_id' => '1', 'name' => 'Chattogram', 'bn_name' => 'চট্টগ্রাম', 'latitude' => '22.335109', 'longitude' => '91.834073', 'url' => 'www.chittagong.gov.bd'],
            ['id' => '9', 'division_id' => '1', 'name' => 'Coxsbazar', 'bn_name' => 'কক্সবাজার', 'latitude' => '21.4272', 'longitude' => '92.0058', 'url' => 'www.coxsbazar.gov.bd'],
            ['id' => '10', 'division_id' => '1', 'name' => 'Khagrachhari', 'bn_name' => 'খাগড়াছড়ি', 'latitude' => '23.119285', 'longitude' => '91.984663', 'url' => 'www.khagrachhari.gov.bd'],
            ['id' => '11', 'division_id' => '1', 'name' => 'Bandarban', 'bn_name' => 'বান্দরবান', 'latitude' => '22.1953275', 'longitude' => '92.2183773', 'url' => 'www.bandarban.gov.bd'],
            ['id' => '12', 'division_id' => '2', 'name' => 'Sirajganj', 'bn_name' => 'সিরাজগঞ্জ', 'latitude' => '24.4533978', 'longitude' => '89.7006815', 'url' => 'www.sirajganj.gov.bd'],
            ['id' => '13', 'division_id' => '2', 'name' => 'Pabna', 'bn_name' => 'পাবনা', 'latitude' => '23.998524', 'longitude' => '89.233645', 'url' => 'www.pabna.gov.bd'],
            ['id' => '14', 'division_id' => '2', 'name' => 'Bogura', 'bn_name' => 'বগুড়া', 'latitude' => '24.8465228', 'longitude' => '89.377755', 'url' => 'www.bogra.gov.bd'],
            ['id' => '15', 'division_id' => '2', 'name' => 'Rajshahi', 'bn_name' => 'রাজশাহী', 'latitude' => '24.3740', 'longitude' => '88.6011', 'url' => 'www.rajshahi.gov.bd'],
            ['id' => '16', 'division_id' => '2', 'name' => 'Natore', 'bn_name' => 'নাটোর', 'latitude' => '24.420556', 'longitude' => '89.000282', 'url' => 'www.natore.gov.bd'],
            ['id' => '17', 'division_id' => '2', 'name' => 'Joypurhat', 'bn_name' => 'জয়পুরহাট', 'latitude' => '25.1051', 'longitude' => '89.0289', 'url' => 'www.joypurhat.gov.bd',
            ],
            ['id' => '18', 'division_id' => '2', 'name' => 'Chapainawabganj', 'bn_name' => 'চাঁপাইনবাবগঞ্জ', 'latitude' => '24.5965034', 'longitude' => '88.2775122', 'url' => 'www.chapainawabganj.gov.bd'],
            ['id' => '19', 'division_id' => '2', 'name' => 'Naogaon', 'bn_name' => 'নওগাঁ', 'latitude' => '24.9458', 'longitude' => '88.4502', 'url' => 'www.naogaon.gov.bd'],
            ['id' => '20', 'division_id' => '3', 'name' => 'Jashore', 'bn_name' => 'যশোর', 'latitude' => '23.16643', 'longitude' => '89.2081126', 'url' => 'www.jessore.gov.bd'],
            ['id' => '21', 'division_id' => '3', 'name' => 'Satkhira', 'bn_name' => 'সাতক্ষীরা', 'latitude' => 22.35, 'longitude' => 89.15, 'url' => 'www.satkhira.gov.bd'],
            ['id' => '22', 'division_id' => '3', 'name' => 'Meherpur', 'bn_name' => 'মেহেরপুর', 'latitude' => '23.762213', 'longitude' => '88.631821', 'url' => 'www.meherpur.gov.bd'],
            ['id' => '23', 'division_id' => '3', 'name' => 'Narail', 'bn_name' => 'নড়াইল', 'latitude' => '23.172534', 'longitude' => '89.512672', 'url' => 'www.narail.gov.bd'],
            ['id' => '24', 'division_id' => '3', 'name' => 'Chuadanga', 'bn_name' => 'চুয়াডাঙ্গা', 'latitude' => '23.6401961', 'longitude' => '88.841841', 'url' => 'www.chuadanga.gov.bd'],
            ['id' => '25', 'division_id' => '3', 'name' => 'Kushtia', 'bn_name' => 'কুষ্টিয়া', 'latitude' => '23.901258', 'longitude' => '89.120482', 'url' => 'www.kushtia.gov.bd'],
            ['id' => '26', 'division_id' => '3', 'name' => 'Magura', 'bn_name' => 'মাগুরা', 'latitude' => '23.487337', 'longitude' => '89.419956', 'url' => 'www.magura.gov.bd'],
            ['id' => '27', 'division_id' => '3', 'name' => 'Khulna', 'bn_name' => 'খুলনা', 'latitude' => '22.815774', 'longitude' => '89.568679', 'url' => 'www.khulna.gov.bd'],
            ['id' => '28', 'division_id' => '3', 'name' => 'Bagerhat', 'bn_name' => 'বাগেরহাট', 'latitude' => '22.651568', 'longitude' => '89.785938', 'url' => 'www.bagerhat.gov.bd'],
            ['id' => '29', 'division_id' => '3', 'name' => 'Jhenaidah', 'bn_name' => 'ঝিনাইদহ', 'latitude' => '23.5448176', 'longitude' => '89.1539213', 'url' => 'www.jhenaidah.gov.bd'],
            ['id' => '30', 'division_id' => '4', 'name' => 'Jhalakathi', 'bn_name' => 'ঝালকাঠি', 'latitude' => 22.45, 'longitude' => 90.17, 'url' => 'www.jhalakathi.gov.bd'],
            ['id' => '31', 'division_id' => '4', 'name' => 'Patuakhali', 'bn_name' => 'পটুয়াখালী', 'latitude' => '22.3596316', 'longitude' => '90.3298712', 'url' => 'www.patuakhali.gov.bd'],
            ['id' => '32', 'division_id' => '4', 'name' => 'Pirojpur', 'bn_name' => 'পিরোজপুর', 'latitude' => 22.56, 'longitude' => 89.96, 'url' => 'www.pirojpur.gov.bd'],
            ['id' => '33', 'division_id' => '4', 'name' => 'Barisal', 'bn_name' => 'বরিশাল', 'latitude' => 22.7010, 'longitude' => 90.3535, 'url' => 'www.barisal.gov.bd'],
            ['id' => '34', 'division_id' => '4', 'name' => 'Bhola', 'bn_name' => 'ভোলা', 'latitude' => '22.685923', 'longitude' => '90.648179', 'url' => 'www.bhola.gov.bd'],
            ['id' => '35', 'division_id' => '4', 'name' => 'Barguna', 'bn_name' => 'বরগুনা', 'latitude' => 22.0886, 'longitude' => 90.0790, 'url' => 'www.barguna.gov.bd'],
            ['id' => '36', 'division_id' => '5', 'name' => 'Sylhet', 'bn_name' => 'সিলেট', 'latitude' => '24.8897956', 'longitude' => '91.8697894', 'url' => 'www.sylhet.gov.bd'],
            ['id' => '37', 'division_id' => '5', 'name' => 'Moulvibazar', 'bn_name' => 'মৌলভীবাজার', 'latitude' => '24.482934', 'longitude' => '91.777417', 'url' => 'www.moulvibazar.gov.bd'],
            ['id' => '38', 'division_id' => '5', 'name' => 'Habiganj', 'bn_name' => 'হবিগঞ্জ', 'latitude' => '24.374945', 'longitude' => '91.41553', 'url' => 'www.habiganj.gov.bd'],
            ['id' => '39', 'division_id' => '5', 'name' => 'Sunamganj', 'bn_name' => 'সুনামগঞ্জ', 'latitude' => '25.0658042', 'longitude' => '91.3950115', 'url' => 'www.sunamganj.gov.bd'],
            ['id' => '40', 'division_id' => '6', 'name' => 'Narsingdi', 'bn_name' => 'নরসিংদী', 'latitude' => '23.932233', 'longitude' => '90.71541', 'url' => 'www.narsingdi.gov.bd'],
            ['id' => '41', 'division_id' => '6', 'name' => 'Gazipur', 'bn_name' => 'গাজীপুর', 'latitude' => '24.0022858', 'longitude' => '90.4264283', 'url' => 'www.gazipur.gov.bd'],
            ['id' => '42', 'division_id' => '6', 'name' => 'Shariatpur', 'bn_name' => 'শরীয়তপুর', 'latitude' => 23.2083, 'longitude' => 90.7178, 'url' => 'www.shariatpur.gov.bd'],
            ['id' => '43', 'division_id' => '6', 'name' => 'Narayanganj', 'bn_name' => 'নারায়ণগঞ্জ', 'latitude' => '23.63366', 'longitude' => '90.496482', 'url' => 'www.narayanganj.gov.bd'],
            ['id' => '44', 'division_id' => '6', 'name' => 'Tangail', 'bn_name' => 'টাঙ্গাইল', 'latitude' => 24.2490, 'longitude' => 89.9392, 'url' => 'www.tangail.gov.bd'],
            ['id' => '45', 'division_id' => '6', 'name' => 'Kishoreganj', 'bn_name' => 'কিশোরগঞ্জ', 'latitude' => '24.444937', 'longitude' => '90.776575', 'url' => 'www.kishoreganj.gov.bd'],
            ['id' => '46', 'division_id' => '6', 'name' => 'Manikganj', 'bn_name' => 'মানিকগঞ্জ', 'latitude' => 23.8577, 'longitude' => 90.0807, 'url' => 'www.manikganj.gov.bd'],
            ['id' => '47', 'division_id' => '6', 'name' => 'Dhaka', 'bn_name' => 'ঢাকা', 'latitude' => '23.7115253', 'longitude' => '90.4111451', 'url' => 'www.dhaka.gov.bd'],
            ['id' => '48', 'division_id' => '6', 'name' => 'Munshiganj', 'bn_name' => 'মুন্সিগঞ্জ', 'latitude' => 23.6183, 'longitude' => 90.4971, 'url' => 'www.munshiganj.gov.bd'],
            ['id' => '49', 'division_id' => '6', 'name' => 'Rajbari', 'bn_name' => 'রাজবাড়ী', 'latitude' => '23.7574305', 'longitude' => '89.6444665', 'url' => 'www.rajbari.gov.bd'],
            ['id' => '50', 'division_id' => '6', 'name' => 'Madaripur', 'bn_name' => 'মাদারীপুর', 'latitude' => '23.164102', 'longitude' => '90.1896805', 'url' => 'www.madaripur.gov.bd'],
            ['id' => '51', 'division_id' => '6', 'name' => 'Gopalganj', 'bn_name' => 'গোপালগঞ্জ', 'latitude' => '23.0050857', 'longitude' => '89.8266059', 'url' => 'www.gopalganj.gov.bd'],
            ['id' => '52', 'division_id' => '6', 'name' => 'Faridpur', 'bn_name' => 'ফরিদপুর', 'latitude' => '23.6070822', 'longitude' => '89.8429406', 'url' => 'www.faridpur.gov.bd'],
            ['id' => '53', 'division_id' => '7', 'name' => 'Panchagarh', 'bn_name' => 'পঞ্চগড়', 'latitude' => '26.3411', 'longitude' => '88.5541606', 'url' => 'www.panchagarh.gov.bd'],
            ['id' => '54', 'division_id' => '7', 'name' => 'Dinajpur', 'bn_name' => 'দিনাজপুর', 'latitude' => '25.6217061', 'longitude' => '88.6354504', 'url' => 'www.dinajpur.gov.bd'],
            ['id' => '55', 'division_id' => '7', 'name' => 'Lalmonirhat', 'bn_name' => 'লালমনিরহাট', 'latitude' => 25.7600, 'longitude' => 89.5354, 'url' => 'www.lalmonirhat.gov.bd'],
            ['id' => '56', 'division_id' => '7', 'name' => 'Nilphamari', 'bn_name' => 'নীলফামারী', 'latitude' => '25.931794', 'longitude' => '88.856006', 'url' => 'www.nilphamari.gov.bd'],
            ['id' => '57', 'division_id' => '7', 'name' => 'Gaibandha', 'bn_name' => 'গাইবান্ধা', 'latitude' => '25.328751', 'longitude' => '89.528088', 'url' => 'www.gaibandha.gov.bd'],
            ['id' => '58', 'division_id' => '7', 'name' => 'Thakurgaon', 'bn_name' => 'ঠাকুরগাঁও', 'latitude' => '26.0336945', 'longitude' => '88.4616834', 'url' => 'www.thakurgaon.gov.bd'],
            ['id' => '59', 'division_id' => '7', 'name' => 'Rangpur', 'bn_name' => 'রংপুর', 'latitude' => '25.7558096', 'longitude' => '89.244462', 'url' => 'www.rangpur.gov.bd'],
            ['id' => '60', 'division_id' => '7', 'name' => 'Kurigram', 'bn_name' => 'কুড়িগ্রাম', 'latitude' => '25.805445', 'longitude' => '89.636174', 'url' => 'www.kurigram.gov.bd'],
            ['id' => '61', 'division_id' => '8', 'name' => 'Sherpur', 'bn_name' => 'শেরপুর', 'latitude' => '25.0204933', 'longitude' => '90.0152966', 'url' => 'www.sherpur.gov.bd'],
            ['id' => '62', 'division_id' => '8', 'name' => 'Mymensingh', 'bn_name' => 'ময়মনসিংহ', 'latitude' => 24.7474, 'longitude' => 90.4110, 'url' => 'www.mymensingh.gov.bd'],
            ['id' => '63', 'division_id' => '8', 'name' => 'Jamalpur', 'bn_name' => 'জামালপুর', 'latitude' => '24.937533', 'longitude' => '89.937775', 'url' => 'www.jamalpur.gov.bd'],
            ['id' => '64', 'division_id' => '8', 'name' => 'Netrokona', 'bn_name' => 'নেত্রকোণা', 'latitude' => '24.870955', 'longitude' => '90.727887', 'url' => 'www.netrokona.gov.bd'],
            ['id' => '65', 'division_id' => '6', 'name' => 'Dhaka Metro', 'bn_name' => 'ঢাকা মেট্রো', 'latitude' => '23.4682747', 'longitude' => '91.1788135', 'url' => 'www.aa.gov.bd'],
            ['id' => '66', 'division_id' => '1', 'name' => 'Chittagang Metro', 'bn_name' => 'চট্রগ্রাম মেট্রো', 'latitude' => '23.4682747', 'longitude' => '91.1788135', 'url' => 'www.aa.gov.bd'],
            ['id' => '67', 'division_id' => '2', 'name' => 'Rajshahi Metro', 'bn_name' => 'রাজশাহী মেট্রো', 'latitude' => '23.4682747', 'longitude' => '91.1788135', 'url' => 'www.aa.gov.bd'],
            ['id' => '68', 'division_id' => '3', 'name' => 'Khulna Metro', 'bn_name' => 'খুলনা মেট্রো', 'latitude' => '23.4682747', 'longitude' => '91.1788135', 'url' => 'www.aa.gov.bd'],
            ['id' => '69', 'division_id' => '4', 'name' => 'Barishal Metro', 'bn_name' => 'বরিশাল মেট্রো', 'latitude' => '23.4682747', 'longitude' => '91.1788135', 'url' => 'www.aa.gov.bd'],
            ['id' => '70', 'division_id' => '5', 'name' => 'Sylhet Metro', 'bn_name' => 'সিলেট মেট্রো', 'latitude' => '23.4682747', 'longitude' => '91.1788135', 'url' => 'www.aa.gov.bd'],
            ['id' => '71', 'division_id' => '7', 'name' => 'Rangpur Metro', 'bn_name' => 'রংপুর মেট্রো', 'latitude' => '23.4682747', 'longitude' => '91.1788135', 'url' => 'www.aa.gov.bd'],
            ['id' => '72', 'division_id' => '6', 'name' => 'Gazipur Metro', 'bn_name' => 'গাজীপুর মেট্রো', 'latitude' => '23.4682747', 'longitude' => '91.1788135', 'url' => 'www.aa.gov.bd'],
        ];

        try {
            DB::beginTransaction();

            // Ensure divisions exist before inserting
            if (!DB::table('divisions')->count()) {
                $this->command->error('Divisions table is empty. Please seed divisions first.');
                return;
            }

            // Truncate and reset if necessary
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            DB::table('districts')->truncate();
            DB::statement('ALTER TABLE districts AUTO_INCREMENT = 1');
            DB::statement('SET FOREIGN_KEY_CHECKS=1');

            DB::table('districts')->insert($districts);
            DB::commit();

            $this->command->info('Districts seeded successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('DistrictSeeder failed: ' . $e->getMessage());
            $this->command->error('Error seeding districts: ' . $e->getMessage());
        }
    }
}
