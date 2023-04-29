<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceivedArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('received_articles', function (Blueprint $table) {
            $table->id();
            $table->string('article_title',1000);
            $table->string('author_name',1000);
            $table->string('co_author_email',1000);
            $table->string('dept',1000);
            $table->string('abstract',3000);
            $table->string('keywords',1000);
            $table->string('user_login_id',500);
            $table->string('ms_file',200);
            $table->string('potential_reviewer',200);
            $table->string('performa',200);
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
        Schema::dropIfExists('received_articles');
    }
}
