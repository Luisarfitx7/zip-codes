<?php

namespace App\Http\Controllers;
use App\Models\ZipCode;

class ZipCodeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * It returns an array with the data of the zip code, the locality, the settlements, the federal
     * entity and the municipality.
     * 
     * @param zip_code The zip code you want to search for.
     * 
     * @return <code>{
     *     "zip_code": "01000",
     *     "locality": "CIUDAD DE MEXICO",
     *     "settlements": [
     *         {
     *             "key": "1",
     *             "name": "AGRICOLA ORIENTAL",
     *             "zone_type": "U",
     *             "settlement_
     */
    public function show($zip_code)
    {
        $response = ZipCode::where('d_codigo',$zip_code)->get();
        $settlements = [];

        $iterador = 1;

        foreach($response as $item){
            if ($iterador = 1){
                $locality = strtoupper($item->d_ciudad);
                $federal_entity_key = ltrim($item->c_estado, '0');
                $federal_entity_name = strtoupper($item->d_estado);
                $federal_entity_code = $item->c_CP;
                $municipality_key = ltrim($item->c_mnpio, '0');
                $municipality_name = strtoupper($item->D_mnpio);
            }
            $settle["key"] = $item->id_asenta_cpcons ? intval(ltrim($item->id_asenta_cpcons, '0')) : null;
            $settle["name"] = $item->d_asenta ? strtoupper($item->d_asenta) : null;
            $settle["zone_type"] = $item->d_zona ? strtoupper($item->d_zona) : null;
            $settle["settlement_type"]["name"] = $item->d_tipo_asenta ? $item->d_tipo_asenta : null;
            array_push($settlements, $settle);
            $iterador++;
        }
        $data["zip_code"] = $zip_code ? $zip_code : null;
        $data["locality"] = $locality ? $locality : null;
        $data["federal_entity"]["key"] = $federal_entity_key ? intval($federal_entity_key) : null;
        $data["federal_entity"]["name"] = $federal_entity_name ? $federal_entity_name : null;
        $data["federal_entity"]["code"] = $federal_entity_code ? $federal_entity_code : null;
        $data["settlements"] = $settlements ? $settlements : null;
        $data["municipality"]["key"] = $municipality_key ? intval($municipality_key) : null;
        $data["municipality"]["name"] = $municipality_name ? $municipality_name : null;
        return $data;
    }

}