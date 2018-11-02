<?php namespace Guest\Message\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGuestMessage extends Migration
{
    public function up()
    {
        Schema::table('guest_message_', function($table)
        {
            $table->dateTime('send_at');
            $table->increments('id')->unsigned(false)->change();
            $table->dropColumn('created_at');
        });
    }
    
    public function down()
    {
        Schema::table('guest_message_', function($table)
        {
            $table->dropColumn('send_at');
            $table->increments('id')->unsigned()->change();
            $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        });
    }
}
