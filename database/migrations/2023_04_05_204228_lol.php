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
        Schema::table('aduan_adukls', function (Blueprint $table) {
            $table->string('idadu')->nullable();
            $table->string('status')->nullable();
            $table->string('name')->nullable();
            $table->string('docno')->nullable();
            $table->string('mobileno')->nullable();
            $table->string('email')->nullable();
            $table->string('jenis')->nullable();
            $table->string('pihakdiadu')->nullable();
            $table->string('project')->nullable();
            $table->string('address')->nullable();
            $table->string('description')->nullable();

            $table->string('berkaitan')->nullable();
            $table->string('klassifikasi')->nullable();
            $table->string('mediasi')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
