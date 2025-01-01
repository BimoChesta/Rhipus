<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
<<<<<<< HEAD
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('is_admin')->default(1);
            $table->boolean('is_mamber')->default(1);
            $table->string('foto')->default('default.png');
            $table->string('alamat');
            $table->string('tlp');
            $table->date('tglLahir');
            $table->boolean('is_active')->default(1);
            $table->integer('role');
            $table->rememberToken();
            $table->timestamps();
=======
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('avatar')->nullable();
            $table->string('bio')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); // Tambahkan kolom untuk soft delete
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
        });
    }

    /**
     * Reverse the migrations.
<<<<<<< HEAD
     */
    public function down(): void
=======
     *
     * @return void
     */
    public function down()
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
    {
        Schema::dropIfExists('users');
    }
};
