<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreateProjectMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')
            ->unsigned()
            ->index()
            ->nullable();
            $table
            ->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->unsignedBigInteger('category_id')
            ->unsigned()
            ->index()
            ->nullable();
            $table
            ->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
            $table->boolean('status')
            ->default(0)
            ->comment('Active=>1,Archive=>0');
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
        Schema::dropIfExists('project_members');
    }
};
