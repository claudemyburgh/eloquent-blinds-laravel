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
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title')->index();
            $table->string('slug')->unique()->index();
            $table->text('description')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('body')->nullable();
            $table->string('product_range')->nullable();
            $table->boolean('live')->default(true);
            $table->boolean('popular')->default(false);
            $table->integer('price')->nullable()->default(0);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
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
