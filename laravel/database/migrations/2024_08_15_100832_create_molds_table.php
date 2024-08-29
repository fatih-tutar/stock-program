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
        Schema::create('molds', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('mold_number');
            $table->unsignedBigInteger('factory_id');
            $table->string('pdf');
            $table->unsignedBigInteger('company_id');
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('restrict');
            $table->foreign('factory_id')->references('id')->on('factories')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('molds');
    }
};
