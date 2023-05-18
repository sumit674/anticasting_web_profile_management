<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->integer('parent_id')->default(0);
            $table->unsignedBigInteger('created_by')->unsigned()->index()->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('updated_by')->unsigned()->index()->nullable();
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('active')->default(1)->comment('Active=>1,Inactive=>0');
            $table->boolean('status')->default(1)->comment('Active=>1,Archive=>0');
            $table->text('options')->nullable();
            $table->integer('order_id')->nullable();
            $table->timestamps();
        });

        Schema::create('categories_trans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->unsigned()->index()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('project_name')->nullable();
            $table->text('description')->nullable();
            $table->string('lang')->nullable();
            $table->string('img', 255)->nullable();
            $table->string('img_url', 500)->nullable();
            $table->string('img_type')->nullable();
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
        Schema::dropIfExists('categories');
        Schema::dropIfExists('categories_trans');
    }
}
;
