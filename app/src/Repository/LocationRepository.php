<?php

namespace App\Repository;

use App\Model\Location;
use DomainException;
use InvalidArgumentException;

/**
 * Location repository.
 */
class LocationRepository 
{
    /**
     * Returns a collection of Location entities.
     *
     * @return LocationEntity[]
     */
    public function all()
    {
        $result = Location::all();
        return $result;
    }
    
    /**
     * findLocationById
     * @param int $id
     * @return location JSON [] format array
     */
     public function findLocationById($id)
    {
        $result = Location::find($id);
       
        return $result;   
    }
  
    
    /**
     * add location
     * @param [] $data
     * 
     * @return location model
     */
    public function addLocation($data) {
        
        $location = Location::create([
            'location_name' => $data['location_name'],
            'address'            => $data['address'],
            'city'                  => $data['city'],
            'state'               => $data['state'],
            'latitude'     => $data['latitude'],
            'longitude'     => $data['longitude'],
            'phone' 	 => $data['phone'],
            'country'        => $data['country'],
            'postal_code' => $data['postal_code']
        ]);        

        return $location;
    }
	
    /**
    * update location
    * @param [] $data
    * 
    * @return location model
    */
    public function updateLocation($data) {
		
        $location = Location::find($data['id']);
		
        $location->location_name = $data['location_name'];
        $location->address = $data['address'];
        $location->city = $data['city'];
        $location->state = $data['state'];
        $location->latitude = $data['latitude'];
        $location->longitude = $data['longitude'];
        $location->phone = $data['phone'];
        $location->country = $data['country'];
        $location->postal_code = $data['postal_code'];   
        $location->save();

        return $location;
    }
    
    /**
    * delete location
    * @param [] $data
    * 
    * @return location model
    */
    public function delete($id) {

        $location = Location::find($id);
        if($location){
            $destroy = Location::destroy($id);
        }

         return $destroy;
    }

}
