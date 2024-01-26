<?php

/**
 * Define system constants
 */

use Illuminate\Support\Facades\Auth;

define('S_DELETE_MSG', 'Successfully deleted');
define('E_DELETE_MSG', 'Not successfully updated');
define('S_UPDATE_MSG', 'Successfully updated');
define('E_UPDATE_MSG', 'Not successfully updated');
define('S_SAVE_MSG', 'Successfully created');
define('E_SAVE_MSG', 'Not successfully created');

define('VALIDATION_FAIL', 403);
define('SUCCESS', 200);
define('FAIL', 500);
define('ACTIVE', 1);
define('INACTIVE', 0);

/**
 * Get Current user object
 */
if(!function_exists('currentUser'))
{
    function currentUser()
    {
        if (Auth::check())
        {
            return Auth::user();
        }
        return null;
    }
}


// return user id of current user
function userId()
{
    if( Auth::check() )
    {
        return Auth::user()->id;
    }
    return null;
}
