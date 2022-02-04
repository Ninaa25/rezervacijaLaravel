<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoviNazivKoloneBrojTelefona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gosts', function (Blueprint $table) {
            $table->renameColumn('brojtelefona', 'brojTelefona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gosts', function (Blueprint $table) {
            $table->renameColumn('brojTelefona', 'brojtelefona');
        });
    }
}
