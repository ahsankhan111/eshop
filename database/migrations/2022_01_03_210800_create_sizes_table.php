<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('product_id');
            // $table->foreign('product_id')->constraint();
            $table->unsignedBigInteger('product_id');

            // // then the foreign key
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            //$table->foreignId('product_id')->constrained('products')->nullable();


            $table->string('small');
            $table->string('large');
            $table->string('medium');
            $table->string('xLarge');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sizes');
    }
}
