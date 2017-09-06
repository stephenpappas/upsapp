<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use Notifiable;

    protected $table = 'accounts';

    protected $fillable = [
        'accountname', 'accountalpha', 'address1', 'address2', 'city', 'state', 'zip', 'admin_id', 'notes', 'sun_open_time', 'sun_close_time', 'sun_gate_close_time', 'mon_open_time', 'mon_close_time', 'mon_gate_close_time', 'tue_open_time', 'tue_close_time', 'tue_gate_close_time', 'wed_open_time', 'wed_close_time', 'wed_gate_close_time', 'thu_open_time', 'thu_close_time', 'thu_gate_close_time', 'fri_open_time', 'fri_close_time', 'fri_gate_close_time', 'sat_open_time', 'sat_close_time', 'sat_gate_close_time', 'pri_contact_firstname', 'pri_contact_lastname', 'pri_contact_email', 'pri_contact_phone', 'sec_contact_firstname', 'sec_contact_lastname', 'sec_contact_email', 'sec_contact_phone', 'late_contact_firstname', 'late_contact_lastname', 'late_contact_email', 'late_contact_phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    // public function user()
    // {
    //     return $this->hasMany(User::class);
    // }
}
