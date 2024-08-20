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
        Schema::create('daily_movements', function (Blueprint $table) {
            $table->id();
            $table->float('store_incoming')->nullable();
            $table->float('store_outgoing')->nullable();
            $table->float('warehouse_incoming')->nullable();
            $table->float('warehouse_outgoing')->nullable();
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
        Schema::dropIfExists('daily_movements');
    }
};
