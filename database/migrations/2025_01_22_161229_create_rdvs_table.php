<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rdvs', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw("UUID()"));
            $table->foreignUuid("doctor_id")->constrained()->cascadeOnDelete();
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->string("date");
            $table->string("time");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rdvs');
    }
};
