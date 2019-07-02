<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
	public $timestamps = false;
    protected $table = "stock_opname";
 
    protected $fillable = ['WH_SO','ONT_ZTE_F609','ONT_ZTE_F670','ONT_HUAWEI_HG8245H5','ONT_HUAWEI_HG8245HU','ONT_NOKIA_G240WF','STB_ZTE_B7005','STB_HUAWEI_EC6108V9','STB_FIBERHOME_HG680P','WIFI_EXTENDER_EDIMAX_EW7438RPN','TLC_TPLINK_TLPA4010','INDIBOX_AKARI_AZ117ATV','WIRELESS_IOT'];
}
