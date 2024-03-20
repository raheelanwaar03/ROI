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
        Schema::create('admin_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('min_invest');
            $table->string('max_invest');
            $table->string('referral_income');
            $table->string('level_income');
            $table->string('daily_roi_min');
            $table->string('daily_roi_max');
            $table->string('total_roi_min');
            $table->string('total_roi_max');
            $table->string('validity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_plans');
    }
};
