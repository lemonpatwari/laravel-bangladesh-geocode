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
        Schema::table('thanas', function (Blueprint $table) {
            if (!Schema::hasColumn('thanas', 'latitude')) {
                $table->decimal('latitude', 10, 7)->nullable()->after('name');
            }
            if (!Schema::hasColumn('thanas', 'longitude')) {
                $table->decimal('longitude', 10, 7)->nullable()->after('latitude');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('thanas', function (Blueprint $table) {
            if (Schema::hasColumn('thanas', 'latitude')) {
                $table->dropColumn('latitude');
            }
            if (Schema::hasColumn('thanas', 'longitude')) {
                $table->dropColumn('longitude');
            }
        });
    }
};
