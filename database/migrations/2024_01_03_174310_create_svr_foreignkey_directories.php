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
        Schema::table('directories.animals_breeds', function (Blueprint $table) {
            $table->foreign('specie_id')->references('specie_id')->on('directories.animals_species')->cascadeOnUpdate()
                ->noActionOnDelete();
        });

        Schema::table('directories.keeping_types', function (Blueprint $table) {
            $table->foreign('specie_id')->references('specie_id')->on('directories.animals_species')->cascadeOnUpdate()
                ->cascadeOnDelete();
        });

        Schema::table('directories.countries_regions_districts', function (Blueprint $table) {
            $table->foreign('region_id')->references('region_id')->on('directories.countries_regions')->cascadeOnUpdate()
                ->noActionOnDelete();
        });

        Schema::table('directories.countries_regions', function (Blueprint $table) {
            $table->foreign('country_id')->references('country_id')->on('directories.countries')->cascadeOnUpdate()
                ->noActionOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('directories.countries_regions', function (Blueprint $table) {
            $table->dropForeign('country_id');
        });

        Schema::table('directories.countries_regions_districts', function (Blueprint $table) {
            $table->dropForeign('region_id');
        });

        Schema::table('directories.keeping_types', function (Blueprint $table) {
            $table->dropForeign('specie_id');
        });

        Schema::table('directories.animals_breeds', function (Blueprint $table) {
            $table->dropForeign('specie_id');
        });
    }
};
