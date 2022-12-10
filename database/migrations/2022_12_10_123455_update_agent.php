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
            $table->string('matricule')->nullable()->change();
            $table->string('entreprise')->nullable()->change();
            $table->string('localite')->nullable()->change();
            $table->string('federation')->nullable()->change();
            $table->string('date')->nullable()->change();
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