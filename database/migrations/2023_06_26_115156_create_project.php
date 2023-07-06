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
            $table->string('description');
            $table->string('detail',4096)->default("");
            $table->string('categorie');
            $table->string('image');
            $table->integer('client')->default(0);
            $table->integer('hours_support')->default(0);
            $table->integer('awards')->default(0);
            $table->date('date');
            $table->string('url')->default("#");
            $table->boolean('is_visible')->default(0);

            $table->foreign('client')->references('id')->on('clients');
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
