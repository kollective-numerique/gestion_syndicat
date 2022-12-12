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
        //
        Schema::table('agents', function (Blueprint $table) {
            $table->string('nom')->default('abcdef')->change();
            $table->string('postnom')->default('abcdef')->change();
            $table->string('email')->default('abcdef')->change();
            $table->tinyText('sexe')->default('abcdef')->change();
            $table->string('matricule')->default('abcdef')->change();
            $table->string('entreprise')->default('abcdef')->change();
            $table->string('fonction')->default('abcdef')->change();
            $table->string('localite')->default('abcdef')->change();
            $table->string('federation')->default('abcdef')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};