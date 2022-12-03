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
            $table->string('pname');
            $table->string('pprice');
            $table->string('pdetails');
            $table->string('psize');
            $table->string('pimage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.n
     * 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
