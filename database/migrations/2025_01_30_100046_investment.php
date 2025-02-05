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
        Schema::create("investment", function (Blueprint $table) {
            $table->id();
            $table->string('accountno');       
            $table->string('type',['STOCKS','BONDS','EXCHANGE TRADE FUNDS','MONEY MARKET FUNDS']);          
            $table->string('company',['SAFARICOM','EQUITY GROUP','CBK','KPLC','NSE','CIC Asset Management','Old Mutual']);
            $table->integer('period');         
            $table->rememberToken();
            $table->timestamps();
        });
        
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investment');

    }
};
