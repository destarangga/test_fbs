<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToLeadsTable extends Migration
{
    public function up()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->softDeletes();  // Menambahkan kolom deleted_at
        });
    }

    public function down()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropSoftDeletes();  // Menghapus kolom deleted_at jika migrasi di-rollback
        });
    }
}