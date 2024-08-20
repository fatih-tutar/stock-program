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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('products');
            $table->int('client_id');
            $table->string('quantities');
            $table->string('prices');
            $table->int('created_by');
            $table->int('prepared_by');
            $table->int('invoiced_by');
            $table->enum('delivery_method',['store','depot','local','warehouse']);
            $table->text('description');
            $table->enum('status',['received','preparing','invoiced','archived']);
            $table->boolean('is_deleted')->default(false);
            $table->int('company_id');

            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('restrict');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('prepared_by')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('invoiced_by')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
