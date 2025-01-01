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
        Schema::create('table_video', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('judul', 50);
            $table->text('thumbnail');
            $table->text('path');
            $table->text('deskripsi')->nullable();
            $table->text('link_toko');
            $table->integer('view_count')->default(0);
            // Kolom `deleted_at` untuk soft delete
            $table->softDeletes();
            $table->timestamps();

            // Tambahkan foreign key constraint untuk user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('video_path');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_video', function (Blueprint $table) {
            // Hapus foreign key constraint sebelum drop tabel
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('table_video');
    }
};
