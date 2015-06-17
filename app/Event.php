<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_events';

    /**
     * The table field for primary Key.
     *
     * @var string
     */
    protected $primaryKey = 'EventID';

    /**
     * Additional fields to treat as Carbon instances.
     *
     * @var array
     */
    protected $dates = ['EventDate'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                            'Title',        'Description',  'AcademicYearID',
                            'EventDate',    'Notification', 'EventType'
                        ];


}
