<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('job');
            $table->string('description');
            $table->string('from');
            $table->string('lives_in');
            $table->string('birthday');
            $table->string('gender');
            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
