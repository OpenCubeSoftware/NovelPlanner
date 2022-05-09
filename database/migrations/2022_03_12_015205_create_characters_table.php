<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('display_name');
            $table->string('given_name');
            $table->string('surname');
            $table->string('gender');
            $table->enum('type', ['major', 'minor'])->default('major');
            $table->enum('plot_type', ['plot', 'subplot'])->default('plot');
            $table->integer('age')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('education_level')->nullable();
            $table->string('political_views')->nullable();
            $table->string('religious_views')->nullable();
            $table->text('description')->nullable();
            $table->text('physical_description')->nullable();
            $table->text('bio')->nullable();
            $table->text('goals')->nullable();
            $table->text('conflict')->nullable();
            $table->text('evolution')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
};
