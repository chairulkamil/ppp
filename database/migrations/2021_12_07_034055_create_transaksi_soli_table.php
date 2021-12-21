<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiSoliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_soli', function (Blueprint $table) {
            $table->id();
            $table->string('pre_kualifikasi')->nullable();
            $table->string('request_proposal')->nullable();
            $table->string('bid_award')->nullable();
            $table->string('agreement_signing')->nullable();
            $table->string('financial_close')->nullable();
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
        Schema::dropIfExists('transaksi_soli');
    }
}
