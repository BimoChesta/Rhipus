<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beranda', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('avatar')->nullable();
            $table->string('bio')->nullable();
            $table->unsignedBigInteger('user_id'); // Jika Anda menggunakan user_id
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); // Tambahkan kolom untuk soft delete
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beranda', function (Blueprint $table) {
            $table->dropColumn('username'); // Menghapus kolom username
        });
    }
};
