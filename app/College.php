<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_colleges';

    /**
     * The table field for primary Key.
     *
     * @var string
     */
    protected $primaryKey = 'CollegeID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'CollegeID', 'Description' ];


}
