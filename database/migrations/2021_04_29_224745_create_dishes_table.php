<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kitchen_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->string('name');
            $table->string('chef_name')->nullable();
            $table->string('serving_at')->default('restaurant');
            $table->string('code')->default('0');
            $table->double('price');
            $table->integer('calories');
            $table->smallInteger('diet');
            $table->boolean('in_stock')->default(false);
            $table->date('produced_at');
            //$table->dateTime('produced_at');
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
        Schema::dropIfExists('dishes');
    }
}
