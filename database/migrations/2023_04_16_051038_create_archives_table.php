<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archives', function (Blueprint $table) {
            $table->id();
            $table->integer('yyear_id')->default(0);
            $table->integer('vvolume_id')->default(0);
            $table->string('article_title',1000);
            $table->string('corresponding_email',1000);
            $table->string('departments',4000);
            $table->longtext('article_abstract');
            $table->date('received_date');
            $table->date('revised_date');
            $table->date('accepted_date');
            $table->date('available_online_date');
            $table->longtext('contribution_authors_text');
            $table->string('article_keywords',4000);
            $table->string('article_doi',1000);
            $table->string('all_authors',3000);
            $table->longtext('introduction');
            $table->longtext('materials_and_methods');
            $table->longtext('results');
            $table->longtext('discussion');
            $table->longtext('conclusions');
            $table->longtext('acknowledgements');
            $table->longtext('conflict_of_interest');
            $table->longtext('reference');
            $table->string('issue',40);
            $table->string('page_num',40);
            $table->string('pdf_file',200);
            $table->string('epub_file',200);
            $table->string('flip_file',200);
            $table->integer('views');
            $table->integer('downloads');
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
        Schema::dropIfExists('archives');
    }
}
