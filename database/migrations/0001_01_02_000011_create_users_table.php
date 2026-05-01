<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('age')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('goal')->nullable();
            $table->string('training_level')->nullable();
            $table->string('role')->default('user');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('your_daily_lifestyle')->nullable();
            $table->string('avalid_problem')->nullable();
            $table->string('number_of_meals')->nullable();
            $table->string('water_intake')->nullable();
            $table->string('dietary_supplements')->nullable();
            $table->string('number_of_hours_per_day')->nullable();
            $table->string('sleep_quality')->nullable();
            $table->string('stress_level')->nullable();
            $table->foreignId('package_id')->nullable()->constrained()->nullOnDelete();
            $table->text('note')->nullable();
            $table->boolean('active')->default(true);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->text('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
