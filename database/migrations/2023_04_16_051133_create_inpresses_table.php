<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInpressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inpresses', function (Blueprint $table) {
            $table->id();
            $table->string('inpress_title',1000);
            $table->string('inp_co_authors_names',1000);
            $table->string('inpress_abstract',5000);
            $table->string('inpress_keywords',1000);
            $table->string('inpress_pdf',200);
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
        Schema::dropIfExists('inpresses');
    }
}
