<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_questions';

    /**
     * The table field for primary Key.
     *
     * @var string
     */
    protected $primaryKey = 'QuestionID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'Type', 'Question', 'A', 'B', 'C', 'D', 'E', 'Answer', 'Privacy' ];

}
