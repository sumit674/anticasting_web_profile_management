<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBucketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buckets', function (Blueprint $table) {
            $table->id();
            $table->string('bucket_name')
            ->nullable();
            $table->string('movie_name')->
            nullable();
            $table->string('movie_link')->
            nullable();
            $table->longText('description')->
            nullable();
           $table->boolean('status')
            ->default(0)
            ->comment('Active=>1,Archive=>0');
             $table->boolean('archive')
            ->default(0)
            ->comment('Yes=>1,No=>0');
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
        Schema::dropIfExists('buckets');
    }
};
