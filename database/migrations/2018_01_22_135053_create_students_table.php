<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cpf',11); //modificar o tamanho de cpf/cnpj
            $table->string('email')->unique;
            $table->string('phone');
            $table->date('date_birth');
            $table->char('sex',10);
            $table->enum('marital_status',array_keys(\App\Student::MARITAL_STATUS));
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
        Schema::dropIfExists('students');
    }
}
