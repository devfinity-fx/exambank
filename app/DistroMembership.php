<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DistroMembership extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_distromemberships';

    /**
     * The table field for primary Key.
     *
     * @var string
     */
    protected $primaryKey = 'DistroMembershipID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'DistGroupID', 'UserID' ];


}
