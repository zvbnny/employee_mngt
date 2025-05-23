<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('emplyoee_tb', function (Blueprint $table) {

            $table->id();
            $table->string('fname');
            $table->string('midname');
            $table->string('lname');
            $table->integer('age');
            $table->string('address');
            $table->integer('zip');
            $table->timestamps();
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emplyoee_tb');
    }
};
