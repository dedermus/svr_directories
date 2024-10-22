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

        if (!Schema::hasTable('directories.out_basises'))
        {
            Schema::create('directories.out_basises', function (Blueprint $table) {
                $table->comment('Справочник оснований выбытия животного');
                $table->increments('out_basis_id')->comment('Инкремент');
                $table->string('out_basis_guid_self', 64)->nullable(true)->default(null)->comment('GUID (внутренний) оснований выбытия животного');
                $table->string('out_basis_name', 100)->nullable(false)->comment('Наименование оснований выбытия животного');
                $table->string('out_basis_value_horriot', 100)->nullable(false)->comment('Значение для хорриота оснований выбытия животного');
                $table->string('out_basis_selex_code', 64)->nullable(true)->default(null)->comment('Код оснований выбытия животного в Селэксе');
                $table->addColumn('system.system_status', 'out_basis_status')->nullable(true)->default('enabled')->comment('Статус записи');
                $table->addColumn('system.system_status_delete', 'out_basis_status_delete')->nullable(true)->default('active')->comment('Статус удаления записи');
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
        Schema::dropIfExists('directories.out_basises');
    }
};

