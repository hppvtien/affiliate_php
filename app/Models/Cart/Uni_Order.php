<?php

namespace App\Models\Cart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Arr;


class Uni_Order extends Model
{
    use HasFactory;

    // const STATUS_DEFAULT = 1;
    // const STATUS_PROCESS = 2;
    // const STATUS_SUCCESS = 3;
    // const STATUS_CANCEL = -1;
    protected $guarded = [''];
    protected $table = 'uni_order';
    const STATUS_DEFAULT = 0;
    const STATUS_PROCESS = 1;
    const STATUS_SUCCESS = 2;
    const STATUS_TRASH  = 3;
    public $statusGlobal;
    protected $g_status = [
        self::STATUS_DEFAULT => [
            'name' => 'Tiếp nhận',
            'name_en' => 'Receive',
            'class' => 'badge-primary'
        ],
        self::STATUS_PROCESS => [
            'name' => 'Kiểm tra và gửi hàng',
            'name_en' => 'Processing',
            'class' => 'badge-success'
        ],
        self::STATUS_SUCCESS => [
            'name' => 'Hoàn thành',
            'name_en' => 'Complete',
            'class' => 'badge-success'
        ],
        self::STATUS_TRASH => [
            'name' => 'Đã hủy',
            'name_en' => 'Cancel',
            'class' => 'badge-dange'
        ],
        
    ];


    public static function getStatusGlobal()
    {
        $that = new self();
        return $that->g_status;
    }
    public function getStatus()
    {
        return Arr::get($this->g_status, $this->status, "[N\A]");
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
