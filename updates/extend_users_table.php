<?php namespace Waka\Crsm\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class ExtendUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->integer('client_id')->unsigned()->nullable();
        });
    }

    public function down()
    {
        
        Schema::table('users', function ($table) {
            if (Schema::hasColumn('client_id'))
                {
                    $table->dropColumn('client_id');
                }
        });
    }
}
