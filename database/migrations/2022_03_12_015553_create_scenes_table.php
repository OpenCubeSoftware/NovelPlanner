<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scenes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('title');
            $table->foreignId('chapter_id');
            $table->enum('status', ['first_draft', 'second_draft', 'final_review', 'done'])->default('first_draft');
            $table->enum('type', ['action', 'reaction'])->default('action');
            $table->enum('plot_level', ['plot', 'subplot'])->default('plot');
            $table->text('description');
            $table->text('notes')->nullable();
            $table->string('goal')->nullable();
            $table->string('outcome')->nullable();
            $table->string('conflict')->nullable();
            $table->date('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scenes');
    }
};
