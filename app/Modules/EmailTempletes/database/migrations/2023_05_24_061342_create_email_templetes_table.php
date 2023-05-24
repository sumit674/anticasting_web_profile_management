<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreateEmailTempletesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_templetes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('active');
            $table->timestamps();
        });
        Schema::create('email_templetes_trans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etemplate_id')->unsigned()->index()->nullable();
            $table->foreign('etemplate_id')->references('id')->on('email_templetes')->onDelete('cascade');
            $table->string('subject', 255)->nullable();
            $table->string('lang', 20)->nullable();
            $table->text('html_content', 5000)->nullable();
            $table->string('template_key', 500)->nullable();
            $table->string('template_keywords', 1000)->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('email_templetes_trans');
        Schema::dropIfExists('email_templetes');
    }
};
