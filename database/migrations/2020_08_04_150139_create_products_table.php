<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('description')->nullable();
            $table->string('img_url')->nullable();
            $table->string('year')->nullable();
            $table->string('cost')->nullable();
            $table->string('magnit_type')->nullable();
            $table->string('magnit_field')->nullable();
            $table->string('channels_number')->nullable();
            $table->string('gradient')->nullable();
            $table->string('program_level')->nullable();
            $table->timestamps();

            $table->text('garanty')->nullable();
            $table->text('options')->nullable();
            $table->text('coil_complect')->nullable();
            $table->text('in_complect')->nullable();
            $table->text('climat_gear')->nullable();
            $table->text('instalation')->nullable();
            $table->text('features')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
