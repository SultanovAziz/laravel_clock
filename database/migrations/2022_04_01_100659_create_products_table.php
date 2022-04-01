<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('brands_id');
            $table->string('title');
            $table->string('alias')->unique();
            $table->text('content');
            $table->float('price');
            $table->float('old_price');
            $table->enum('status',[0,1]);
            $table->string('keywords');
            $table->string('description');
            $table->string('img')->default('brand_no_image.jpg');
            $table->enum('hit',[0,1]);
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
        Schema::dropIfExists('products');
    }
};
