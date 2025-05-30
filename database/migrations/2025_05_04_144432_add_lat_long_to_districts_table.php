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
        Schema::table('districts', function (Blueprint $table) {
            if (!Schema::hasColumn('districts', 'latitude')) {
                $table->decimal('latitude', 10, 7)->nullable()->after('name');
            }
            if (!Schema::hasColumn('districts', 'longitude')) {
                $table->decimal('longitude', 10, 7)->nullable()->after('latitude');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('districts', function (Blueprint $table) {
            if (Schema::hasColumn('districts', 'latitude')) {
                $table->dropColumn('latitude');
            }
            if (Schema::hasColumn('districts', 'longitude')) {
                $table->dropColumn('longitude');
            }
        });
    }
};
