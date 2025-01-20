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
        Schema::create('doctors', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw('UUID()'));
            $table->string("name");
            $table->string("specialty");
            $table->string("degree");
            $table->string("experience");
            $table->longText("about");
            $table->string("status");
            $table->unsignedFloat("fees");
            $table->string("address");
            $table->string("image")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
