<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
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

        if (!Schema::hasTable('directories.out_types'))
        {
            Schema::create('directories.out_types', function (Blueprint $table) {
                $table->comment('Справочник расходов животного');
                $table->increments('out_type_id')->comment('Инкремент');
                $table->string('out_type_guid_self', 64)->nullable(true)->default(null)->comment('GUID (внутренний) расходов животного');
                $table->string('out_type_name', 100)->nullable(false)->comment('Наименование расходов животного');
                $table->string('out_type_value_horriot', 100)->nullable(false)->comment('Значение для хорриота расходов животного');
                $table->string('out_type_selex_code', 64)->nullable(true)->default(null)->comment('Код расходов животного в Селэксе');
                $table->addColumn('system.system_status', 'out_type_status')->nullable(true)->default('enabled')->comment('Статус записи');
                $table->addColumn('system.system_status_delete', 'out_type_status_delete')->nullable(true)->default('active')->comment('Статус удаления записи');
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
        Schema::dropIfExists('directories.out_types');
    }
};

