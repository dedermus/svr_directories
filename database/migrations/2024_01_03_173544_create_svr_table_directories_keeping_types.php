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

        if (!Schema::hasTable('directories.keeping_types'))
        {
            Schema::create('directories.keeping_types', function (Blueprint $table) {
                $table->comment('Справочник типов содержания животных');
                $table->increments('keeping_type_id')->comment('Инкремент');
                $table->integer('specie_id')->nullable(true)->default(null)->comment('Идентификатор видов животных');
                $table->string('keeping_type_guid_self', 64)->nullable(true)->default(null)->comment('GUID (внутренний) типов содержания животного');
                $table->string('keeping_type_guid_horriot', 64)->nullable(true)->default(null)->comment('GUID (хорриота) типов содержания животного');
                $table->string('keeping_type_uuid_horriot', 64)->nullable(true)->default(null)->comment('UUID (хорриота) типов содержания животного');
                $table->string('keeping_type_name', 100)->nullable(false)->comment('Наименование типов содержания животного');
                $table->string('keeping_type_selex_code', 64)->nullable(true)->default(null)->comment('Код типов содержания животного в Селэксе');
                $table->addColumn('system.system_status', 'keeping_type_status')->nullable(true)->default('enabled')->comment('Статус записи');
                $table->addColumn('system.system_status_delete', 'keeping_type_status_delete')->nullable(true)->default('active')->comment('Статус удаления записи');
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
        Schema::dropIfExists('directories.keeping_types');
    }
};

