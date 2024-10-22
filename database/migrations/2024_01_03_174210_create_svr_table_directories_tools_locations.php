<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Traits\PostgresGrammar;

return new class extends Migration
{
    use PostgresGrammar;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $this->enumExists();

        if (!Schema::hasTable('directories.tools_locations'))
        {
            Schema::create('directories.tools_locations', function (Blueprint $table) {
                $table->comment('Справочник места нанесения маркировки животного');
                $table->increments('tool_location_id')->comment('Инкремент');
                $table->string('tool_location_guid_self', 64)->nullable(true)->default(null)->comment('GUID (наш, внутренний) места нанесения маркировки животного');
                $table->string('tool_location_guid_horriot', 64)->nullable(true)->default(null)->comment('GUID (хорриота) места нанесения маркировки животного');
                $table->string('tool_location_uuid_horriot', 64)->nullable(true)->default(null)->comment('UUID (хорриота) места нанесения маркировки животного');
                $table->string('tool_location_name', 100)->nullable(true)->default(null)->comment('Наименование места нанесения маркировки животного');
                $table->string('tool_location_selex_code', 64)->nullable(true)->default(null)->comment('Код места нанесения маркировки животного в Селэксе');
                $table->addColumn('system.system_status', 'tool_location_status')->nullable(true)->default('enabled')->comment('Статус записи');
                $table->addColumn('system.system_status_delete', 'tool_location_status_delete')->nullable(true)->default('active')->comment('Статус удаления записи');
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
        Schema::dropIfExists('directories.tools_locations');
    }
};

