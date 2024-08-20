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
            $table->unsignedBigInteger('client_id');
            $table->string('quantities');
            $table->string('prices');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('prepared_by');
            $table->unsignedBigInteger('invoiced_by');
            $table->enum('delivery_method',['store','depot','local','warehouse']);
            $table->text('description');
            $table->enum('status',['received','preparing','invoiced','archived']);
            $table->boolean('is_deleted')->default(false);
            $table->unsignedBigInteger('company_id');

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
