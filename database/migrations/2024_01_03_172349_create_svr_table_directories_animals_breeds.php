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

        if (!Schema::hasTable('directories.animals_breeds'))
        {
            Schema::create('directories.animals_breeds', function (Blueprint $table)
            {
                $table->comment('Справочник пород животных');
                $table->increments('breed_id')->comment('Инкремент');
                $table->integer('specie_id')->nullable(false)->comment('Идентификатор вида животных');
                $table->string('breed_guid_self', 64)->nullable(true)->default(null)->comment(
                    'GUID (наш, внутренний) породы животных'
                );
                $table->string('breed_guid_horriot', 64)->nullable(true)->default(null)->comment(
                    'GUID (хорриота) породы животных'
                );
                $table->string('breed_uuid_horriot', 64)->nullable(true)->default(null)->comment(
                    'UUID (хорриота) породы животных'
                );
                $table->string('breed_name', 100)->nullable(false)->comment('Наименование породы животных');
                $table->smallInteger('breed_selex_code')->nullable(true)->default(null)->comment(
                    'Код породы животных  в Селэксе'
                );
                $table->addColumn('system.system_status', 'breed_status')->nullable(false)->default('enabled')->comment(
                    ''
                );
                $table->addColumn('system.system_status_delete', 'breed_status_delete')->nullable(false)->default(
                    'active'
                )->comment('');
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
        Schema::dropIfExists('directories.animals_breeds');
    }
};
