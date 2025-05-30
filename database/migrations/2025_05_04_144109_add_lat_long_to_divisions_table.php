<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('divisions', function (Blueprint $table) {
            if (!Schema::hasColumn('divisions', 'latitude')) {
                $table->decimal('latitude', 10, 7)->nullable()->after('name');
            }
            if (!Schema::hasColumn('divisions', 'longitude')) {
                $table->decimal('longitude', 10, 7)->nullable()->after('latitude');
            }

            if (!Schema::hasColumn('divisions', 'url')) {
                $table->string('url')->nullable()->after('bn_name');
            }
        });
    }

    public function down(): void
    {
        Schema::table('divisions', function (Blueprint $table) {
            if (Schema::hasColumn('divisions', 'latitude')) {
                $table->dropColumn('latitude');
            }
            if (Schema::hasColumn('divisions', 'longitude')) {
                $table->dropColumn('longitude');
            }
            if (Schema::hasColumn('divisions', 'url')) {
                $table->dropColumn('url');
            }
        });
    }
};
