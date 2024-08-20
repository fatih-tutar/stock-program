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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prepared_by');
            $table->unsignedBigInteger('factory_id');
            $table->string('contact_person');
            $table->unsignedBigInteger('product_id');
            $table->float('quantity');
            $table->string('length');
            $table->date('due_date');
            $table->boolean('is_draft')->default(true);
            $table->boolean('is_form')->default(false);
            $table->boolean('is_deleted')->default(false);
            $table->unsignedBigInteger('company_id');
            $table->timestamps();

            $table->foreign('prepared_by')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('factory_id')->references('id')->on('factories')->onDelete('restrict');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('restrict');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
