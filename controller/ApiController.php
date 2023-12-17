<?php
/**
 * Author : Efendi
 * Email : mefendi3010@gmail.com
 */

class API
{

    public function data()
    {
        $data = [
            [
                "name" => "Static Maps",
                "endpoint" => "https://maps.googleapis.com/maps/api/staticmap?center=45%2C10&zoom=7&size=400x400&key=",
                "pricing" => "$2"
            ],
            [
                "name" => "Streetview",
                "endpoint" => "https://maps.googleapis.com/maps/api/streetview?size=400x400&location=40.720032,-73.988354&fov=90&heading=235&pitch=10&key=",
                "pricing" => "$7"
            ],
            [
                "name" => "Embed",
                "endpoint" => "https://www.google.com/maps/embed/v1/place?q=place_id:ChIJyX7muQw8tokR2Vf5WBBk1iQ&key=",
                "pricing" => "Varies"
            ],
            [
                "name" => "Directions",
                "endpoint" => "https://maps.googleapis.com/maps/api/directions/json?origin=Disneyland&destination=Universal+Studios+Hollywood4&key=",
                "pricing" => "$5"
            ],
            [
                "name" => "Geocoding",
                "endpoint" => "https://maps.googleapis.com/maps/api/geocode/json?latlng=40,30&key=",
                "pricing" => "$5"
            ],
            [
                "name" => "Find Place from Text",
                "endpoint" => "https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=Museum%20of%20Contemporary%20Art%20Australia&inputtype=textquery&fields=photos,formatted_address,name,rating,opening_hours,geometry&key=",
                "pricing" => "Varies"
            ],
            [
                "name" => "Autocomplete",
                "endpoint" => "https://maps.googleapis.com/maps/api/place/autocomplete/json?input=Bingh&types=%28cities%29&key=",
                "pricing" => "Varies"
            ],
            [
                "name" => "Elevation",
                "endpoint" => "https://maps.googleapis.com/maps/api/elevation/json?locations=39.7391536,-104.9847034&key=",
                "pricing" => "$5"
            ],
            [
                "name" => "Timezone",
                "endpoint" => "https://maps.googleapis.com/maps/api/timezone/json?location=39.6034810,-119.6822510&timestamp=1331161200&key=",
                "pricing" => "$5"
            ],
            [
                "name" => "Roads",
                "endpoint" => "https://roads.googleapis.com/v1/nearestRoads?points=60.170880,24.942795|60.170879,24.942796|60.170877,24.942796&key=",
                "pricing" => "$10"
            ],
            [
                "name" => "Geolocate",
                "endpoint" => "https://www.googleapis.com/geolocation/v1/geolocate?key=",
                "pricing" => "$5"
            ],
        ];

        return $data;
    }

    public function core($key)
    {
        $data = array();
        for ($i=0; $i < count($this->data()); $i++) { 
             $urlWithKey = $this->data()[$i]['endpoint'] . $key;
             $result = $this->curlUrl($urlWithKey);
             $arrayendpoint = array_merge($this->data()[$i], ["status" => $result]);
          
            $resultfix = [   
                "name" => $arrayendpoint['name'],
                "endpoint" => $urlWithKey,
                "pricing" => $arrayendpoint['pricing'],
                "status" => $arrayendpoint["status"]
            ];
            array_push($data, $resultfix);
        }
        return $data;
    }   


    public function curlUrl($url){
        $curl = curl_init();
        curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        ]);

        
        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $err = curl_error($curl);
        curl_close($curl);

        $responseJsonDecode = json_decode($response);
        $statusCode = [403, 404, 400];

            if(in_array($httpcode, $statusCode)){
                return "Not Valid:";
                exit;
            }
                if(isset($responseJsonDecode->error_message)){
                    return "Not Valid:";
                    exit;
                }elseif(isset($responseJsonDecode->errorMessage)){
                    return "Not Valid:";
                    exit;
                }elseif(isset($responseJsonDecode->error)){
                    return "Not Valid:";
                    exit;
                }else{
                    return "Valid";
                    exit;
                }
       
    }
}
