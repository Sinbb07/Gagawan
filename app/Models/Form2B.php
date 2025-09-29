<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form2B extends Model
{
    protected $table = 'tbl_form2b';
    protected $primaryKey = 'form2BID';
    public $incrementing = false;   // custom string IDs
    protected $keyType = 'string';

    protected $fillable = [
        'form2BID',
        'user_ID',
        'protocol',
        'pi_name',
        'pi_email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_ID', 'user_ID');
    }

    public function researchInfo()
    {
    return $this->hasOne(ResearchInformation::class, 'user_ID', 'user_ID');
    }
}
