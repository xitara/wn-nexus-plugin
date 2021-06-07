<?php namespace Xitara\Nexus\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateConfigsTable extends Migration
{
    public function up()
    {
        Schema::create('xitara_nexus_configs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('xitara_nexus_configs');
    }
}
