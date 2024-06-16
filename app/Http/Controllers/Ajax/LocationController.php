<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Ward;
use App\Repositories\Interfaces\DistrictRepositoryInterface;

class LocationController extends Controller
{
    protected $districtRepository;
    public function __construct(DistrictRepositoryInterface $districtRepository)
    {
        $this->districtRepository = $districtRepository;
    }
    public function getLocations(Request $request)
    {
        $district_id = $request->location_id;
        $districts = $this->districtRepository->findByProvince($district_id);
        $res = [
            'html' => $this->renderHtml($districts)
        ];
        return response()->json($res);
    }

    public function getDistrict(Request $request)
    {
        $province_code =  $request->province_code;
        $districts = District::where('province_code', $province_code)->get();

        // render html
        $html = "<option value='0'> -- Chọn Quận/Huyện -- </option>";
        foreach ($districts as $district) {
            $html .= "<option value='$district->code'> $district->name </option>";
        }

        return response()->json($html);
    }

    public function getWard(Request $request)
    {
        $district_code =  $request->district_code;
        $wards = Ward::where('district_code', $district_code)->get();

        // render html
        $html = "<option value='0'> -- Chọn Phường/Xã -- </option>";
        foreach ($wards as $ward) {
            $html .= "<option value='$ward->code'> $ward->name </option>";
        }
        return response()->json($html);
    }

    public function renderHtml($districts) {
        $html = "<option value='0'> -- Chọn Quận/Huyện -- </option>";
            foreach ($districts as $district) {
                $html .= "<option value='$district->code'> $district->name </option>";
            }
        return $html;
    }
}
