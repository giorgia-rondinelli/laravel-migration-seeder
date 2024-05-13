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
        Schema::table('trains', function (Blueprint $table) {
            $table->tinyInteger('carriage');
            $table->boolean('on_time');
            $table->boolean('deleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('carriage');
            $table->dropColumn('on_time');
            $table->dropColumn('deleted');

        });
    }
};
