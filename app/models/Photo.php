<?php

/**
 * @author Abed Halawi <abed@questionemploi.com>
 */

/**
 * @property [type] [varname] [description] (This line is just for syntax demonstration)
 *
 * @property string original The original photo URL submitted by the user
 * @property string thumbnail A URL of the smaller size of the original for faster loading
 * @timestamps
 * @property belongsTo:User user The user that this photo belongs to
 * @property belongsTo:Application application The application that this photo was submitted to
 */
class Photo extends Eloquent {

    protected $fillable = ['original', 'thumbail'];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function application()
    {
        return $this->belongsTo('Application');
    }
}
