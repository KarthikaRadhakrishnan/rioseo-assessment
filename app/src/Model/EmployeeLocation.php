<?php

namespace App\Model;
 
use Illuminate\Database\Eloquent\Model;

class EmployeeLocation extends Model {
            
        protected $table = 'employee_locations';
        protected $guarded = [];
        public $timestamps = false;
        
        public function employee()
        {
            $this->belongsTo('\App\Model\Employee','employees','id');
        }
        
        public function location()
        {
            $this->belongsTo('\App\Model\Location','locations','id');
        }
        
}

