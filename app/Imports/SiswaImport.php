<?php

namespace App\Imports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([
            'WH_SO' => $row[0],
            'ONT_ZTE_F609' => $row[1], 
            'ONT_ZTE_F670' => $row[2],
            'ONT_HUAWEI_HG8245H5' => $row[3],
            'ONT_HUAWEI_HG8245HU' => $row[4],
            'ONT_NOKIA_G240WF' => $row[5],
            'STB_ZTE_B7005' => $row[6],
            'STB_HUAWEI_EC6108V9' => $row[7],
            'STB_FIBERHOME_HG680P' => $row[8],
            'WIFI_EXTENDER_EDIMAX_EW7438RPN' => $row[9],
            'TLC_TPLINK_TLPA4010' => $row[10],
            'INDIBOX_AKARI_AZ117ATV' => $row[11],
            'WIRELESS_IOT' => $row[12],
        ]);
    }
}
