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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('product_no');
            $table->string('code');
            $table->string('model');
            $table->string('amount');
            $table->string('price');
            $table->string('technical_drawing');
            $table->string('product_image');
            $table->text('description')->nullable();
            $table->int('order');
            $table->boolean('is_deleted')->default(false);
            $table->int('company_id');
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
