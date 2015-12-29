<?php
/**
 * Created by PhpStorm.
 * User: dhis
 * Date: 29/07/15
 * Time: 21:40
 */

/*
| -------------------------------------------------------------------------
| Tables.
| -------------------------------------------------------------------------
| Database table names.
*/

$config['tables']['user']          = 'users';
$config['tables']['team']          = 'team';



/*
 *
 *
 | Users table column and Group table column you want to join WITH.
 |
 *
 *
 */
$config['join']['user']                     = 'user_id';
$config['join']['groups']                   = 'group_id';
$config['tables']['tshirt_size']            = 'size_id';
$config['tables']['participant_type']       = 'participant_id';

