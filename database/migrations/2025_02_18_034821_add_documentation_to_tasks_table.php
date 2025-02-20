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
        Schema::table('tasks', function (Blueprint $table) {
            $table->string('dokumentasi')->nullable()->after('status');
            $table->string('dokumentasi1')->nullable()->after('status');
            $table->string('dokumentasi2')->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('dokumentasi');
            $table->dropColumn('dokumentasi1');
            $table->dropColumn('dokumentasi2');
        });
    }
};