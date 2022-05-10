<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->string('staff_id');
            $table->string('tag_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('other_name')->nullable();
            $table->string('job_title');
            $table->date('employment_date');
            $table->date('birthdate');
            $table->foreignId('department_id')->constrained();
            $table->foreignId('section_id')->constrained();
            $table->string('ssnit_no');
            $table->string('ghana_card_no');
            $table->string('convid19_card_no');
            $table->foreignId('driving_license_id')->constrained('driving_licenses');
            $table->string('edu_qualification');
            $table->string('min_com_cert');
            $table->string('telephone_no');
            $table->foreignId('roster_id')->constrained();
            $table->string('hometown');
            $table->string('birth_place');
            $table->string('place_of_res_onsite');
            $table->string('res_address_onsite');
            $table->string('place_of_res_offsite');
            $table->string('res_address_offsite');
            $table->string('rank');
            $table->string('status');
            $table->foreignId('tier2_id')->constrained();
            $table->enum('provident_fund_contributor', ['yes', 'no']);
            $table->enum('unionized', ['yes', 'no']);
            $table->string('branch_union')->nullable();
            $table->string('pmsu')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
