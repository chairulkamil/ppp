<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalPenyiapanUnsoliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal_penyiapan_unsoli', function (Blueprint $table) {
            $table->id();
            $table->string('pengajuan_dokumen')->nullable();
            $table->string('evaluasi_dokumen')->nullable();
            $table->string('penyusunan_feasibility')->nullable();
            $table->string('evaluasi_feasibility')->nullable();
            $table->string('approval_letter')->nullable();
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
        Schema::dropIfExists('proposal_penyiapan_unsoli');
    }
}
