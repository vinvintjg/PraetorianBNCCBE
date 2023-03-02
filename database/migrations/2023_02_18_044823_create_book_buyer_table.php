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
        Schema::create('book_buyer', function (Blueprint $table) {
            $table->unsignedBigInteger('Book_Id');
            $table->foreign('Book_Id')->references('id')->on('books')->onDelete('restrict');

            $table->unsignedBigInteger('Buyer_Id');
            $table->foreign('Buyer_Id')->references('id')->on('buyers')->onDelete('restrict');

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
        Schema::dropIfExists('book_buyer');
    }
};
