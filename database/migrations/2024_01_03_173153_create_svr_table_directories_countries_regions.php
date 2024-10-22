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

        if (!Schema::hasTable('directories.countries_regions'))
        {
            Schema::create('directories.countries_regions', function (Blueprint $table) {
                $table->comment('Справочник регионов');
                $table->increments('region_id')->comment('Инкремент');
                $table->integer('region_obl')->nullable(false)->comment('Внешний код региона');
                $table->integer('country_id')->nullable(false)->comment('NGOS - внутренний код государства из таблицы DIRECTORY.COUNTRIES');
                $table->string('region_name', 152)->nullable(false);
                $table->addColumn('system.system_status', 'region_status')->nullable(true)->default('enabled')->comment('Статус записи');
                $table->addColumn('system.system_status_delete', 'region_status_delete')->nullable(true)->default('active')->comment('Статус удаления записи');
                // Это поля "created_at" и "updated_at".
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directories.countries_regions');
    }
};

