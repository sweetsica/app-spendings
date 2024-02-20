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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->nullable();
            $table->integer('bin')->nullable();
            $table->string('shortName')->nullable();
            $table->string('logo')->nullable();
            $table->boolean('transferSupported')->nullable();
            $table->boolean('lookupSupported')->nullable();
            $table->string('short_name')->nullable();
            $table->integer('support')->nullable();
            $table->boolean('isTransfer')->nullable();
            $table->string('swift_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banks');
    }
};
