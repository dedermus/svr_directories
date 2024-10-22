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

        if (!Schema::hasTable('directories.mark_statuses'))
        {
            Schema::create('directories.mark_statuses', function (Blueprint $table) {
                $table->comment('Справочник видов маркирования');
                $table->increments('mark_status_id')->comment('Инкремент');
                $table->string('mark_status_guid_self' ,64)->nullable(true)->default(null)->comment('GUID (внутренний) видов маркирования');
                $table->string('mark_status_name' ,100)->nullable(false)->comment('Наименование видов маркирования');
                $table->string('mark_status_value_horriot' ,100)->nullable(false)->comment('Значение для хорриота видов маркирования');
                $table->string('mark_status_selex_code' ,64)->nullable(true)->default(null)->comment('Код видов маркирования в Селэксе');
                $table->addColumn('system.system_status', 'mark_status_status')->nullable(true)->default('enabled')->comment('Статус записи');
                $table->addColumn('system.system_status_delete', 'mark_status_status_delete')->nullable(true)->default('active')->comment('Статус удаления записи');
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
        Schema::dropIfExists('directories.mark_statuses');
    }
};

