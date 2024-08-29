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
        Schema::table('molds', function (Blueprint $table) {
            $table->unsignedBigInteger('factory_id')->change();
            $table->foreign('factory_id')->references('id')->on('factories')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('molds', function (Blueprint $table) {
            $table->integer('factory_id')->change();
            $table->dropForeign(['factory_id']);
        });
    }
};
