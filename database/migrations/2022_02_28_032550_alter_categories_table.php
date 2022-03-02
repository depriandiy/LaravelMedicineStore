<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() // diproses ketika php artisan migrate dijalankan
    {
        // Schema::table('categories', function (Blueprint $table) {
        //     $table->string('description')->nullable(); // menambah kolom desc pada tabel categories
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // diproses ketika migrate:rollback dijalankan
    {
        // Schema::table('categories', function (Blueprint $table) {
        //     $table->dropColumn('description'); // menghapus kolom desc pada tabel categories
        // });
    }
}
