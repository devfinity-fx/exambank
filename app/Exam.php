<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_exams';

    /**
     * The table field for primary Key.
     *
     * @var string
     */
    protected $primaryKey = 'ExamID';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'SubjectID',        'ExamType',     'GradingPeriod',
        'ExamSet',          'Privacy'
    ];


}
