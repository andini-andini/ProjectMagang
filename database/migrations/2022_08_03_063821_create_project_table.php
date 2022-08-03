<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('tag', 5)->unique();
            $table->string('name');
            $table->unsignedBigInteger('departement_id');
            $table->foreign('departement_id')->references('id')->on('departement');
            $table->string('jumlahAsset');
            $table->string('lokasi');
            $table->date('startDate');
            $table->date('dueDate');
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
        Schema::dropIfExists('project');
    }
}
