<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_subjects';

    /**
     * The table field for primary Key.
     *
     * @var string
     */
    protected $primaryKey = 'SubjectID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'SubjectID', 'Description', 'ShortName' ];

}
