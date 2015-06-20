<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_examquestions';

    /**
     * The table field for primary Key.
     *
     * @var string
     */
    protected $primaryKey = 'ExamQuestionID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'ExamPartID', 'QuestionID',  'Occurence' ];


}
