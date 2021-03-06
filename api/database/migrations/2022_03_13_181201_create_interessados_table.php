<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Rode a migração.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interessados', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverta a migração.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interessados');
    }
};
