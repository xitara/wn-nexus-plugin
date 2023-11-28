<?php

namespace Xitara\Nexus\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class ExtendWinterLocalesWithTimezone extends Migration
{
    public function up()
    {
        // $table = 'winter_translate_locales';
        // if (Schema::hasTable($table)) {
        //     if (Schema::hasColumns($table, ['nexus_timezone'])) {
        //         return;
        //     }

        //     Schema::table($table, function ($table) {
        //         $table->string('nexus_timezone')->nullable();
        //     });
        // }
    }

    public function down()
    {
        // $table = 'winter_translate_locales';
        // if (Schema::hasTable($table)) {
        //     if (!Schema::hasColumns($table, ['nexus_timezone'])) {
        //         return;
        //     }

        //     Schema::table($table, function ($table) {
        //         $table->dropColumn('nexus_timezone');
        //     });
        // }
    }
}
