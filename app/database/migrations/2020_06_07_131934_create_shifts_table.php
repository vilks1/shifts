<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('shifts', static function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('start', false, true)->index();
            $table->string('start_timezone');
            $table->integer('end', false, true)->index();
            $table->string('end_timezone');
            $table->string('user_name')->nullable();
            $table->string('user_email');
            $table->string('location');
            $table->json('event')->nullable();
            $table->float('rate')->nullable();
            $table->float('charge');
            $table->string('area')->nullable()->index();
            $table->json('departments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('shifts');
    }
}
