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
        Schema::create('order_forms', function (Blueprint $table) {
            $table->id();
            $table->string('orders');
            $table->unsignedBigInteger('factory_id');
            $table->unsignedBigInteger('company_id');
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();

            $table->foreign('factory_id')->references('id')->on('factories')->onDelete('restrict');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_forms');
    }
};
