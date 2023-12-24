<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('desks', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_available')->default(true);
            $table->enum('desk_type', ['8_hours', 'by_hour'])->default('by_hour');
            $table->integer('desk_number')->nullable(); // Added desk_number column
            $table->integer('total_available_minutes')->default(480)->nullable();
            $table->timestamps();
        });
            // Populate the 'desk_number' column with numbers from 1 to 28
    for ($i = 1; $i <= 28; $i++) {
        DB::table('desks')->insert([
            'desk_number' => $i,
        ]);
    }

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desks');
    }
};
