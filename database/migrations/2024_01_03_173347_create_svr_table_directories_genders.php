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

        if (!Schema::hasTable('directories.genders'))
        {
            Schema::create('directories.genders', function (Blueprint $table) {
                $table->comment('Справочник полов животного');
                $table->increments('gender_id')->comment('Инкремент');
                $table->string('gender_guid_self',64)->nullable(true)->default(null)->comment('GUID (внутренний) полов животного');
                $table->string('gender_name',100)->nullable(false)->comment('Наименование полов животного');
                $table->string('gender_value_horriot',100)->nullable(false)->comment('Значение для хорриота полов животного');
                $table->string('gender_selex_code',64)->nullable(true)->default(null)->comment('Код полов животного в Селэксе');
                $table->addColumn('system.system_status', 'gender_status')->nullable(true)->default('enabled')->comment('Статус записи');
                $table->addColumn('system.system_status_delete', 'gender_status_delete')->nullable(true)->default('active')->comment('Статус удаления записи');
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
        Schema::dropIfExists('directories.genders');
    }
};

