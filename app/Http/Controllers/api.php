<?php
/**
 * Created by PhpStorm.
 * User: tokarmaxim
 * Date: 13.06.18
 * Time: 0:33
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;

class api extends Controller
{
    public function index($somevar)
    {
        echo json_encode(['response'=> $somevar]);
    }

}