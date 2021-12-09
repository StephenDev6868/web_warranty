<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlertProgramsTableAddColsStartedAtAndEndAt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->text('term')->nullable()->change();
            $table->text('requirement')->nullable()->change();
            $table->text('protection_range')->nullable()->change();
            $table->text('customer_rule')->nullable()->change();
            $table->text('auth_rule')->nullable()->change();
            $table->date('started_at')->nullable()->after('status');
            $table->date('end_at')->nullable()->after('started_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->dropColumn('term');
            $table->dropColumn('requirement');
            $table->dropColumn('protection_range');
            $table->dropColumn('customer_rule');
            $table->dropColumn('auth_rule');
            $table->dropColumn('started_at');
            $table->dropColumn('end_at');
        });
    }
}
