<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_topics';

    /**
     * The table field for primary Key.
     *
     * @var string
     */
    protected $primaryKey = 'TopicID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'TopicID', 'SubjectID', 'Title', 'GradingPeriod' ];

}
