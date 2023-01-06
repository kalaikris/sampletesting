<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\City; 
use App\Traits\HttpResponses;
use App\Http\Resources\CountryResource;
use App\Http\Resources\StateResource;
use App\Http\Resources\CityResource;

class CountryStateCityController extends Controller
{
    use HttpResponses;
    function countries(){
        $data = CountryResource::collection(
            Country::get()
        );
        return $this->success(
            $data,
            "",
            200
        );
    }
    function states($countryId){
        $data = StateResource::collection(
            State::where('country_id', $countryId)->get()
        );
        return $this->success(
            $data,
            "",
            200
        );
    }
    function cities($stateId){
        $data = CityResource::collection(
            City::where('state_id', $stateId)->get()
        );
        return $this->success(
            $data,
            "",
            200
        );
    }
}