<?php namespace Guest\Message\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGuestMessage2 extends Migration
{
    public function up()
    {
        Schema::table('guest_message_', function($table)
        {
            $table->timestamp('updated_at')->nullable();
            $table->renameColumn('send_at', 'created_at');
        });
    }
    
    public function down()
    {
        Schema::table('guest_message_', function($table)
        {
            $table->dropColumn('updated_at');
            $table->renameColumn('created_at', 'send_at');
        });
    }
}
