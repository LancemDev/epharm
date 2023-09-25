<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('drug_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        // Add real drug categories
        $realDrugCategories = [
            ['name' => 'Antibiotics'],
            ['name' => 'Painkillers'],
            ['name' => 'Antivirals'],
            ['name' => 'Antifungals'],
            ['name' => 'Anti-inflammatory'],
            ['name' => 'Antipyretics'],
            ['name' => 'Antiemetics'],
            ['name' => 'Antihypertensives'],
            ['name' => 'Antidiabetics'],
            ['name' => 'Anticoagulants'],
        ];

        DB::table('drug_categories')->insert($realDrugCategories);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drug_categories');
    }
};
