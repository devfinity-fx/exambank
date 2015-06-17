<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_attachments';

    /**
     * The table field for primary Key.
     *
     * @var string
     */
    protected $primaryKey = 'AttachmentID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'FileName' ];

}
