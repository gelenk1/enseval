<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retur extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='history';

    protected $fillable = [
        'noDraft',
        'nrb',
        'admin_nik',
        'admin_create',
        'ekspedisi_process_nik',
        'ekspedisi_process_create',
        'ekspedisi_to_retur_nik',
        'ekspedisi_to_retur_create',
        'retur_check_nik',
        'retur_check_create',
        'admin_gudang_check_nik',
        'admin_gudang_check_create',
        'admin_cross_check_nik',
        'admin_cross_check_create',
        'admin_cross_check_status',
        'admin_cross_check_keterangan',
        'admin_fa_cn_nik',
        'admin_fa_cn_create',
        'keterangan',
        'created_at',
        'updated_at'
];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
}
