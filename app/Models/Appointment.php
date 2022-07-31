<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'full_name',
        'contact_number',
        'email',
        'service',
        'time_slot',
        'date',
        'location',
        'problem'
    ];

    protected $primaryKey = 'id';
    protected $table = 'appointment';

    public function __construct()
    {

    }

    static public function getListDataTable($order_column, $order_column_by, $limit, $offset, $search): array
    {
        $query = DB::table((new Appointment)->getTable());

        if (!empty($search)) {
            $query->where(function ($query) use ($search) {
                $query->Where('full_name', 'like', '%' . $search . '%');
                $query->Where('contact_number', 'like', '%' . $search . '%');
                $query->Where('service', 'like', '%' . $search . '%');
            });
        }

        $query->select('*')->orderBy($order_column, $order_column_by);

        $recordsTotal = $query->count();

        $data = $query->skip($offset)->take($limit)->get()->toArray();

        return ['recordsTotal' => $recordsTotal, 'data' => $data];
    }
}
