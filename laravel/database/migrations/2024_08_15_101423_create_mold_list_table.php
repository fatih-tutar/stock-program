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
        Schema::create('mold_list', function (Blueprint $table) {
            $table->id();
            $table->string('customer');
            $table->string('contact_person');
            $table->string('product_info');
            $table->string('price');
            $table->string('factory');
            $table->string('factory_price');
            $table->string('user_id');
            $table->text('description');
            $table->enum('status',['normal','deleted','archived_add','arciheved_remove']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mold_list');
    }
};
