<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DistroGroup extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_distgroups';

    /**
     * The table field for primary Key.
     *
     * @var string
     */
    protected $primaryKey = 'DistGroupID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'DistGroupID', 'Description' ];



}
