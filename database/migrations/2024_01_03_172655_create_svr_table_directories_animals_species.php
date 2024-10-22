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

        if (!Schema::hasTable('directories.animals_species'))
        {
            Schema::create('directories.animals_species', function (Blueprint $table)
            {
                $table->comment('Справочник видов животных');
                $table->increments('specie_id')->comment('Инкремент');
                $table->string('specie_guid_self', 64)->nullable(true)->default(null)->comment('GUID (внутренний) видов животных');
                $table->string('specie_guid_horriot', 64)->nullable(true)->default(null)->comment('GUID (хорриота) видов животных');
                $table->string('specie_uuid_horriot', 64)->nullable(true)->default(null)->comment('UUID (хорриота) видов животных');
                $table->string('specie_name', 100)->nullable(false)->comment('Наименование видов животных');
                $table->string('specie_selex_code', 64)->nullable(true)->default(null)->comment('Код видов животных  в Селэксе');
                $table->addColumn('system.system_status', 'specie_status')->nullable(false)->default('enabled')->comment('Статус записи видов животных');
                $table->addColumn('system.system_status_delete', 'specie_status_delete')->nullable(false)->default('active')->comment('Статус удаления видов животных');
                $table->timestamp('specie_created_at')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Дата создания записи');
                $table->timestamp('update_at')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Дата удаления записи');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directories.animals_species');
    }
};

