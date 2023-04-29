<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopCitedArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_cited_articles', function (Blueprint $table) {
            $table->id();
            $table->string('top_title',1000);
            $table->string('top_co_authors_names',1000);
            $table->string('top_year_pages',1000);
            $table->string('top_abstract',3000);
            $table->string('top_keywords',1000);
            $table->string('top_pdf',200);
            $table->integer('top_citations');
		    $table->string('paperid',1000);
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
        Schema::dropIfExists('top_cited_articles');
    }
}
