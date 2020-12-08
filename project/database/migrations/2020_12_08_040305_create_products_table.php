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
            $table->string('name', 50);
            $table->unsignedInteger('price');
            $table->Text('img1')->nullable();
            $table->Text('img2')->nullable();
            $table->Text('img3')->nullable();
            $table->Text('img4')->nullable();
            $table->Text('img5')->nullable();
            $table->unsignedSmallInteger('category_id');
            $table->unsignedInteger('qty');
            $table->text('description');
            $table->softDeletes('deleted_at', 0);
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
}
