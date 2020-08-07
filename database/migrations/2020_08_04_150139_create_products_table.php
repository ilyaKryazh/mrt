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
            $table->integer('year')->nullable();
            $table->decimal('cost', 8, 1)->nullable();
            $table->string('magnit_type')->nullable();
            $table->decimal('magnit_field', 8, 1)->nullable();
            $table->integer('channels_number')->nullable();
            $table->integer('gradient')->nullable();
            $table->decimal('program_level', 8, 1)->nullable();
            $table->timestamps();

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
