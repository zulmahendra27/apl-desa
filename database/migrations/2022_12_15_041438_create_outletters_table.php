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
        Schema::create('outletters', function (Blueprint $table) {
            $table->id();
            $table->string('random_id')->unique();
            $table->foreignId('category_id');
            $table->string('nomor');
            $table->date('tanggal');
            $table->string('perihal');
            $table->string('tujuan');
            $table->string('file');
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
        Schema::dropIfExists('outletters');
    }
};
