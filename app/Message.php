<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_messages';

    /**
     * The table field for primary Key.
     *
     * @var string
     */
    protected $primaryKey = 'MessageID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'MemoID', 'Subject', 'Description', 'MessageType' ];

}
