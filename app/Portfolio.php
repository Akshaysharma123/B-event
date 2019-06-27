<?php

namespace App;

use Kyslik\ColumnSortable\Sortable;
use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use Sortable;use Eloquence;
    protected $table = 'portfolios';

    protected $date = [
        'creted_at', 'updated_at',
    ];
    protected $fillable = [
        'event_name', 'event_address', 'event_date','client_feedback','priority','banner'
    ];
    public $sortable = ['event_name', 'event_address', 'event_date','priority'];
	protected $searchableColumns = ['event_name', 'event_address','priority'];
    public function additional()
    {
        return $this->belongsTo(\App\Image::class,'portfolio_id');
    }
}
