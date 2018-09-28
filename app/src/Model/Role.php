<?php

namespace App\Model;
 
use Illuminate\Database\Eloquent\Model;

class Role extends Model {
            
        protected $table = 'job_titles';
        protected $guarded = [];
        public $timestamps = false;
        
        public function employee()
        {
            return $this->belongsTo('\App\Model\Employee', 'employees', 'id');
        }
}