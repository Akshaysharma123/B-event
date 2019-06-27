<?php

namespace App;
use Kyslik\ColumnSortable\Sortable;
use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use Sortable;use Eloquence;
    protected $table = 'sliders';

    protected $dates = [
        'created_at', 'updated_at',
    ];
    protected $fillable = [
        'name', 'priority', 'path','main_text','sub_text'
    ];
    public $sortable = ['name', 'priority','created_at'];
	protected $searchableColumns = ['name', 'priority'];

	
}
