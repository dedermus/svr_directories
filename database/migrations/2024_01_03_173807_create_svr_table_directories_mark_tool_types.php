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

        if (!Schema::hasTable('directories.mark_tool_types'))
        {
            Schema::create('directories.mark_tool_types', function (Blueprint $table) {
                $table->comment('Справочник типов маркирования');
                $table->increments('mark_tool_type_id')->comment('Инкремент');
                $table->string('mark_tool_type_guid_self', 64)->nullable(true)->default(null)->comment('GUID (внутренний) типов маркирования');
                $table->string('mark_tool_type_name', 100)->nullable(false)->comment('Наименование типов маркирования');
                $table->string('mark_tool_type_value_horriot', 100)->nullable(false)->comment('Значение для хорриота типов маркирования');
                $table->string('mark_tool_type_selex_code', 64)->nullable(true)->default(null)->comment('Код типов маркирования в Селэксе');
                $table->addColumn('system.system_status', 'mark_tool_type_status')->nullable(true)->default('enabled')->comment('Статус записи');
                $table->addColumn('system.system_status_delete', 'mark_tool_type_status_delete')->nullable(true)->default('active')->comment('Статус удаления записи');
                $table->timestamp('mark_tool_type_created_at')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Дата создания записи');
                $table->timestamp('update_at')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Дата удаления записи');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directories.mark_tool_types');
    }
};

