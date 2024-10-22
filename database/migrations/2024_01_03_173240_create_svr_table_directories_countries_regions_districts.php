<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Svr\Core\Traits\PostgresGrammar;

return new class extends Migration
{
    use PostgresGrammar;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $this->enumExists();

        if (!Schema::hasTable('directories.countries_regions_districts'))
        {
            Schema::create('directories.countries_regions_districts', function (Blueprint $table) {
                $table->comment('Справочник районов');
                $table->increments('district_id')->comment('Инкремент');
                $table->integer('district_rn')->nullable(false)->comment('Внешний код района');
                $table->integer('region_id')->nullable(false)->comment('Внутренний код области');
                $table->integer('country_ngos')->nullable(false)->comment('Внутренний код страны');
                $table->string('district_name', 20)->nullable(false)->comment('Название района');
                $table->addColumn('system.system_status', 'district_status')->nullable(true)->default('enabled')->comment('Статус записи');
                $table->addColumn('system.system_status_delete', 'district_status_delete')->nullable(true)->default('active')->comment('Статус удаления записи');
                $table->timestamp('district_created_at')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Дата создания записи');
                $table->timestamp('update_at')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Дата удаления записи');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directories.countries_regions_districts');
    }
};

