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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->json('project_photos')->nullable();
            $table->string('client_logo')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->default('pending');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('client_website')->nullable();
            $table->string('project_type')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
