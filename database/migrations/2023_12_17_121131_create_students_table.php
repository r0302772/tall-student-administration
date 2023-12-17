<?php

use App\Models\Programme;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Programme::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            // $table->foreignId('programme_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('student_number');
            // $table->integer('student_number');
            $table->string('first_name');
            $table->string('last_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
