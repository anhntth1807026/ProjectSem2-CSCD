<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnProCategoryIdAndProPayAndProActiveInTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('pro_category_id')->index()->default(0)->after('name');
            $table->tinyInteger('pro_pay')->default(0)->after('price');
            $table->tinyInteger('pro_active')->default(1)->index()->after('pro_pay');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_products', function (Blueprint $table) {
            $table->dropColumn('pro_category_id');
            $table->dropColumn('pro_pay');
            $table->dropColumn('pro_active');
        });
    }
}
