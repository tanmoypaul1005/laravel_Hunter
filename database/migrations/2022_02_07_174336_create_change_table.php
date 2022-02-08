<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('value', function (Blueprint $table) {
        $table->string('name',20)->change();
         
        //Column Modifying 
        // Schema::table('value', function (Blueprint $table) {
        // $table->renameColumn('name','student_name');

        // Schema::table('value', function (Blueprint $table) {
        // $table->dropColumn('name');

        //Table Modifying
        // Schema::rename('value',"value1"); 
        // Schema::dropIfExists('value1'); 
       
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('change');
    }
}
