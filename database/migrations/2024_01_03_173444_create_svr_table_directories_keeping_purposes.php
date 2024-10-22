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

        if (!Schema::hasTable('directories.keeping_purposes'))
        {
            Schema::create('directories.keeping_purposes', function (Blueprint $table) {
                $table->comment('Справочник целей содержания животных');
                $table->increments('keeping_purpose_id')->comment('Инкремент');
                $table->string('keeping_purpose_guid_self', 64)->nullable(true)->default(null)->comment('GUID (внутренний) целей содержания животных');
                $table->string('keeping_purpose_guid_horriot', 64)->nullable(true)->default(null)->comment('GUID (хорриота) целей содержания животных');
                $table->string('keeping_purpose_uuid_horriot', 64)->nullable(true)->default(null)->comment('UUID (хорриота) целей содержания животных');
                $table->string('keeping_purpose_name', 100)->nullable(false)->comment('Наименование целей содержания животных');
                $table->string('keeping_purpose_selex_code', 64)->nullable(true)->default(null)->comment('Код целей содержания животных  в Селэксе');
                $table->addColumn('system.system_status', 'keeping_purpose_status')->nullable(true)->default('enabled')->comment('Статус записи');
                $table->addColumn('system.system_status_delete', 'keeping_purpose_status_delete')->nullable(true)->default('active')->comment('Статус удаления записи');
                $table->timestamp('keeping_purpose_created_at')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Дата создания записи');
                $table->timestamp('update_at')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Дата удаления записи');
            });

        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directories.keeping_purposes');
    }
};

