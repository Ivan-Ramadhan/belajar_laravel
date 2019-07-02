<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StockOpname extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_opname', function (Blueprint $table) {
    
            $table->string("WH_SO");
            $table->integer("ONT_ZTE_F609");
           $table->integer("ONT_ZTE_F670");
           $table->integer("ONT_HUAWEI_HG8245H5");
           $table->integer("ONT_HUAWEI_HG8245HU");
           $table->integer("ONT_NOKIA_G240wf");
           $table->integer("STB_ZTE_B7005");
           $table->integer("STB_HUAWEI_EC6108V9");
           $table->integer("STB_FIBERHOME_F609");
           $table->integer("WIFI EXTENDER_EDIMAX_EW7438RPN");
           $table->integer("TLC_TPLINK_TLPA4010");
           $table->integer("INDIBOX_AKARI_AZ117ATV");
           $table->integer("    WIRELESS IOT");

    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
