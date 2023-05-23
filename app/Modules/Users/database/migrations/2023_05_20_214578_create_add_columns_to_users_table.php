<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->date('picture_updated_at')
                ->after('password')
                ->nullable()
                ->useCurrent();
            $table->boolean('picture_email_sent')->default(0)->comment('Yes=>1,No=>0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('picture_updated_at');
            $table->dropColumn('picture_email_sent');
        });
    }
}
;