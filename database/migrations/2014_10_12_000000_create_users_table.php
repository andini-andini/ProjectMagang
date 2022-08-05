<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone', 15)->nullable();
            $table->string('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->text('address')->nullable();
            $table->enum('role', ['adm', 'tec', 'usr'])->nullable()->default('usr');
            // $table->unsignedBigInteger('departement_id');
            // $table->foreign('departement_id')->references('id')->on('departement');
            $table->string('image')->default('https://bootdey.com/img/Content/avatar/avatar7.png');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
