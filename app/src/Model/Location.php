<?php

namespace App\Model;
 
use Illuminate\Database\Eloquent\Model;

class Location extends Model {
            
        protected $table = 'locations';
        protected $guarded = [];
        public $timestamps = false;
        
        public function employeeLocation()
        {
            return $this->belongsToMany('\App\Model\Employee', 'employee_locations', 'location_id');
        }
        
}