<?php namespace Guest\Message\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGuestMessage extends Migration
{
    public function up()
    {
        Schema::create('guest_message_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('fullname', 150)->nullable();
            $table->string('email', 150);
            $table->string('subject', 250);
            $table->text('content')->nullable();
            $table->timestamp('created_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('guest_message_');
    }
}
