<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailbox extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_mailbox';

    /**
     * The table field for primary Key.
     *
     * @var string
     */
    protected $primaryKey = 'MailID';

}
