<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamPart extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_examparts';

    /**
     * The table field for primary Key.
     *
     * @var string
     */
    protected $primaryKey = 'ExamPartID';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ExamID',           'Part',         'HeaderText',
        'PointsPerItem',    'TotalItems',   'TotalPoints'
    ];

}
