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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->int('main_category');
            $table->int('sub_category');
            $table->string('code')->nullable();
            $table->string('name');
            $table->int('quantity')->nullable();
            $table->int('pallet_quantity')->nullable();
            $table->int('warehouse_quantity')->nullable();
            $table->string('shelf')->nullable();
            $table->float('unit_kg')->nullable();
            $table->string('length')->nullable();
            $table->float('cost_price')->nullable();
            $table->float('selling_price')->nullable();
            $table->int('factory_id')->nullable();
            $table->text('description')->nullable();
            $table->float('stock_quantity')->nullable();
            $table->float('alert_quantity')->nullable();
            $table->float('warehouse_alert_quantity')->nullable();
            $table->int('order')->nullable();
            $table->string('customer_name')->nullable();
            $table->date('date')->nullable();
            $table->date('due_date')->nullable();
            $table->float('selling_price')->nullable();
            $table->int('company_id');
            $table->timestamps();

            $table->foreign('main_category')->references('id')->on('categories')->onDelete('restrict');
            $table->foreign('sub_category')->references('id')->on('categories')->onDelete('restrict');
            $table->foreign('factory_id')->references('id')->on('factories')->onDelete('restrict');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
