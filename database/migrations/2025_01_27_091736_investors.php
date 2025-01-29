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
        Schema::create('investors', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('firstname');
            $table->string('othernames');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('phone')->unsigned()->nullable();
            $table->string('national_id')->nullable(); 
            $table->string('kra_pin')->nullable();  
            $table->rememberToken();
            $table->timestamps();
    });

}

    /**
     * Reve*/
    public function down(): void
    {
        Schema::dropIfExists('investors');

    }
};

