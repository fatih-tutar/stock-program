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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone', 13)->nullable();
            $table->unsignedTinyInteger('company_id')->nullable();
            $table->enum('role', ['admin', 'employee'])->default('employee');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_deleted')->default(false);

            //$table->foreign('company_id')->references('id')->on('companies')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //$table->dropForeign(['company_id']);
            $table->dropColumn(['phone', 'company_id', 'role', 'is_active', 'is_deleted']);
        });
    }
};
