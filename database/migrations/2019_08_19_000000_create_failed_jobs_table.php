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
=======
     *
     * @return void
     */
    public function up()
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
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
        Schema::dropIfExists('failed_jobs');
    }
};
