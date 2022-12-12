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
            $table->string('nom')->nullable()->change();
            $table->string('postnom')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->date('date')->nullable()->change();
            $table->tinyText('sexe')->nullable()->change();
            $table->string('matricule')->nullable()->change();
            $table->string('entreprise')->nullable()->change();
            $table->string('fonction')->nullable()->change();
            $table->string('localite')->nullable()->change();
            $table->string('federation')->nullable()->change();
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