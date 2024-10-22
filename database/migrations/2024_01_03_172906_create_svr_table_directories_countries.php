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

        if (!Schema::hasTable('directories.countries'))
        {
            Schema::create('directories.countries', function (Blueprint $table) {
                $table->comment('Справочник государств');
                $table->increments('country_id')->comment('Инкремент');
                $table->string('country_guid_self', 64)->nullable(true)->default(null)->comment('GUID (внутренний) государства');
                $table->string('country_guid_horriot', 64)->nullable(true)->default(null)->comment('GUID (хорриота) государства');
                $table->string('country_uuid_horriot', 64)->nullable(true)->default(null)->comment('UUID (хорриота) государства');
                $table->integer('country_ngos')->nullable(true)->default(null)->comment('Код страны внутренний');
                $table->integer('country_gos')->nullable(true)->default(null)->comment('Код страны внешний');
                $table->string('country_name', 100)->nullable(true)->default(null)->comment('Название страны по русски');
                $table->string('country_kod', 8)->nullable(true)->default(null)->comment('Буквенный код альфа-');
                $table->string('country_kod3', 8)->nullable(true)->default(null)->comment('Буквенный код альфа-3');
                $table->string('country_kod3_cifra', 8)->nullable(true)->default(null)->comment('Цифровой код страны; ТРЕХЗНАЧНЫЙ');
                $table->string('country_name_eng', 100)->nullable(true)->default(null)->comment('Название страны по английски');
                $table->addColumn('system.system_status', 'country_status')->nullable(true)->default('enabled')->comment('Статус страны');
                $table->addColumn('system.system_status_delete', 'country_status_delete')->nullable(true)->default('active')->comment('Статус удаления страны');
                $table->timestamp('country_created_at')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Дата создания записи');
                $table->timestamp('update_at')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Дата удаления записи');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directories.countries');
    }
};

