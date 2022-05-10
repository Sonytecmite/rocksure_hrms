<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependantChildrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependant_childrens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->contrained('employees');
            $table->string('c_name');
            $table->date('c_birthdate');
            $table->enum('c_student', ['Yes', 'No']);
            $table->string('c_name_of_inst')->nullable();
            $table->string('c_location');
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
        Schema::dropIfExists('dependant_childrens');
    }
}
