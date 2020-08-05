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
            $table->string('name');
            $table->string('brand');
            $table->string('package');
            $table->string('img_url');
            $table->integer('year');
            $table->decimal('cost', 8, 2);
            $table->string('magnit_type');
            $table->decimal('magnit_field', 8, 2);
            $table->integer('channels_number');
            $table->integer('gradient');
            $table->decimal('program_level', 8, 2);
            $table->timestamps();

            $table->text('description');

            $table->text('options');
            $table->text('coil_complect');
            $table->text('in_complect');
            $table->text('climat_gear');
            $table->text('instalation');
            $table->text('features');

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
