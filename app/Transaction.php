<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $guarded = ['*'];

    public function users()
    {
        return $this->belongsTo(User::class, 'tr_user_id');
    }

    public function getStatusAttribute()
    {
        switch ($this->tr_status) {
            case -1:
                return 'Huỷ';
                break;
            case 0:
                return 'Đang chờ xử lý';
                break;
            case 1:
                return 'Hoàn thành';
                break;
            default:
                return 'Không xác định';
                break;
        }
    }

    function fetch_revenue()
    {
        $this->db->select('tr_total');
        $this->db->from('transactions');
        $this->db->groupBy('created_at');
        $this->db->orderBy('created_at', 'DESC');

        return $this->db->get();
    }

    function fetch_transactions($tr_total)
    {
        $this->db->where('tr_total', $tr_total);
        $this->db->orderBy('id', 'ASC');
        return $this->db->get('transactions');

    }
}

