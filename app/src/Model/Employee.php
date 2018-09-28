<?php

namespace App\Model;
 
use Illuminate\Database\Eloquent\Model;
use App\Model\employeeLocation;
use App\Model\Location;
use App\Model\Role;

class Employee extends Model {
            
        protected $table = 'employees';
        protected $guarded = [];
        public $timestamps = false;
        
        public function employee_locations()
        {
            return $this->belongsToMany('\App\Model\Location', 'employee_locations', 'employee_id');
        }
       
        public function title() {
            return $this->hasOne('\App\Model\Role', 'id','job_title_id');
        }
}