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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            //user_id foreign key user
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            //date permission
            $table->date('date_permission');
            //reason
            $table->string('reason');
            //image nullable
            $table->string('image')->nullable();
            //is_approve is a boolean
            $table->boolean('is_approved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
