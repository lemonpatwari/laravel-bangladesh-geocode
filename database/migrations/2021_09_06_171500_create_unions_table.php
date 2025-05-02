<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Drop the table if it already exists
        if (Schema::hasTable('unions')) {
            Schema::drop('unions');
        }

        Schema::create('unions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bn_name')->nullable();
            $table->string('url')->nullable();
            $table->boolean('status')->default(1)->index()->comment('1 = active, 0 = inactive');
            $table->foreignId('thana_id')->constrained('thanas')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();


            // Additional index for performance
            $table->index('thana_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unions');
    }
}
