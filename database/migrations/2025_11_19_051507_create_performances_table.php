<?php

use App\Helpers\CuratorMigrationHelper;
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
        Schema::create('performances', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description_eng');
            $table->longText('description_esp');
            $table->longText('images');
            $table->longText('links');
            $table->timestamps();
        });
        CuratorMigrationHelper::migratePivotTable('performance_media', 'performance_id');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        CuratorMigrationHelper::rollbackPivotTable(table: 'performance_media');
        Schema::dropIfExists('performances');
    }
};
