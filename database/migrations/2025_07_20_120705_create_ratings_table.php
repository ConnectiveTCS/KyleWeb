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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('project_id')->index();
            $table->string('client_name')->nullable(); // Assuming this is the name of the client being rated
            $table->string('business_name')->nullable(); // Assuming this is the name of the business being rated
            $table->longText('client_photo')->nullable(); // Assuming this is a photo of the client
            $table->string('business_photo')->nullable(); // Assuming this is a photo of the business
            $table->string('project_name')->nullable(); // Assuming this is the name of the project being
            $table->tinyInteger('rating')->unsigned(); // Assuming rating is a small integer (e.g., 1-5)
            $table->text('comment')->nullable(); // Optional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
