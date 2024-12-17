<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('inquiries', function (Blueprint $table) {
            $table->string('product_code')->nullable(); // Or use other column types if needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('inquiries', function (Blueprint $table) {
        $table->dropColumn('product_code');
    });
}
};
