<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function get_nrc(){
        $nrc_language = config('myanmarnrc.language');
        $nrc_regions = config('myanmarnrc.regions_states');
        $nrc_townships = config('myanmarnrc.townships');
        $nrc_citizens = config('myanmarnrc.citizens');
        $nrc_characters = config('myanmarnrc.characters');
        return response()->json([
            'nrc_languages'     => $nrc_language,
            'nrc_characters'    => $nrc_characters,
            'nrc_regions'       => $nrc_regions,
            'nrc_townships'     => $nrc_townships,
            'nrc_citizens'      => $nrc_citizens,
        ]);
    }
}
