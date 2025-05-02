<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Drop the table if it already exists
        if (Schema::hasTable('districts')) {
            Schema::drop('districts');
        }

        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bn_name')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('url')->nullable();
            $table->boolean('status')->default(1)->index()->comment('1 = active, 0 = inactive');
            $table->foreignId('division_id')->constrained('divisions')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();


            // Additional indexes
            $table->index('division_id');
            $table->index('name');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
}
