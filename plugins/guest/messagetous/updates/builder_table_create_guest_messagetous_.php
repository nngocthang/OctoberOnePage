<?php namespace Guest\Messagetous\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGuestMessagetous extends Migration
{
    public function up()
    {
        Schema::create('guest_messagetous_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('fullname', 256)->nullable();
            $table->string('email', 256);
            $table->string('subject', 256);
            $table->text('content')->nullable();
            $table->dateTime('receivedtime');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('guest_messagetous_');
    }
}
