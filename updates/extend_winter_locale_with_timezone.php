<?php namespace Xitara\Nexus\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class ExtendWinterLocalesWithTimezone extends Migration
{

    public function up()
    {
        if (Schema::hasColumns('winter_translate_locales', ['nexus_timezone'])) {
            return;
        }

        Schema::table('winter_translate_locales', function ($table) {
            $table->string('nexus_timezone')->nullable();
        });

    }

    public function down()
    {
        Schema::table('winter_translate_locales', function ($table) {
            $table->dropColumn('nexus_timezone');
        });
    }
}
