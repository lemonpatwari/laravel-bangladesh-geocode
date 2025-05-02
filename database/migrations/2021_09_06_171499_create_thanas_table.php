<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Drop the table if it already exists
        if (Schema::hasTable('thanas')) {
            Schema::drop('thanas');
        }

        Schema::create('thanas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bn_name')->nullable();
            $table->string('url')->nullable();
            $table->boolean('status')->default(1)->index()->comment('1 = active, 0 = inactive');
            $table->foreignId('district_id')->constrained('districts')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();

            // Additional indexes (if not already added by foreignId)
            $table->index('district_id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thanas');
    }
}
