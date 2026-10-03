<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{
    Schema::table('countries', function (Blueprint $table) {
        $table->string('code2', 2)->after('name');
        $table->string('code3', 3)->after('code2');
    });
}

    /**
     * Reverse the migrations.
     */
   public function down(): void
{
    Schema::table('countries', function (Blueprint $table) {
        $table->dropColumn(['code2', 'code3']);
    });
}
};
