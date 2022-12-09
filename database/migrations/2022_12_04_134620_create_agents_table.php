<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('postnom');
            $table->string('email');
            $table->date('date');
            $table->tinyText('sexe');
            $table->string('matricule');
            $table->string('entreprise');
            $table->string('fonction');
            $table->string('localite');
            $table->string('federation');
            $table->string('password')->nullable()->default(Hash::make('1234'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
};
