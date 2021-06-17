<?php namespace Xitara\Nexus\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

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
        if (!Schema::hasColumns('winter_translate_locales', ['nexus_timezone'])) {
            return;
        }

        Schema::table('winter_translate_locales', function ($table) {
            $table->dropColumn('nexus_timezone');
        });
    }
}
