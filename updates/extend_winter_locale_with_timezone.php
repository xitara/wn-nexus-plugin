<?php namespace Xitara\Nexus\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class ExtendWinterLocalesWithTimezone extends Migration
{

    public function up()
    {
        if (Schema::hasTable('winter_translate_locales')) {
            $table = 'winter_translate_locales';
        } else {
            $table = 'rainlab_translate_locales';
        }

        if (Schema::hasColumns($table, ['nexus_timezone'])) {
            return;
        }

        Schema::table($table, function ($table) {
            $table->string('nexus_timezone')->nullable();
        });

    }

    public function down()
    {
        if (Schema::hasTable('winter_translate_locales')) {
            $table = 'winter_translate_locales';
        } else {
            $table = 'rainlab_translate_locales';
        }

        if (!Schema::hasColumns($table, ['nexus_timezone'])) {
            return;
        }

        Schema::table($table, function ($table) {
            $table->dropColumn('nexus_timezone');
        });
    }
}
