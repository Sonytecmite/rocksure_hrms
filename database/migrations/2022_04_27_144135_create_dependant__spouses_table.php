<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependantSpousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependant__spouses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->contrained('employees');
            $table->string('s_name');
            $table->date('s_birthdate');
            $table->string('s_profession');
            $table->string('s_ghana_card_number');
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
        Schema::dropIfExists('dependant__spouses');
    }
}
