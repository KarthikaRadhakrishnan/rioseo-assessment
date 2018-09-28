<?php

namespace App\Repository;

use App\Entity\UserEntity;
use App\Model\Employee;
use App\Model\Location;
use App\Model\Role;
use App\Model\EmployeeLocation;
use DomainException;
use InvalidArgumentException;
use Exception;

/**
 * Employee repository.
 */
class EmployeeRepository 
{
    /**
     * Returns a collection of Employee entities.
     *
     * @return UserEntity[]
     */
    public function all()
    {
        $query = Employee::with('employee_locations', 'title')->get();

        return $query;
    }
    
    
    public function find($id, $columns = ['*'])
    {
        return Employee::find($id, $columns);
    }
    
    /**
     * findUserById
     * @param int $id
     * @return employee JSON [] format array
     */
     public function findUserById($id)
    {
        $result = Employee::find($id);
       
        return $result;   
    }
    
    /**
     * findUserByEmail
     * @param string $id
     * @return employee JSON [] format 
     */
    public function findUserByEmail($email)
    {
        $result = Employee::where('email', 'like', "%". $email . "%")->first();
       
        return $result;   
    }
    
    /**
     * changePassword
     * @param string $email
     * @param [] $user
     * @return 
     */
    public function changePassword($email, $user)
    {
        $newPassword = $this->randomPassword();
        $password = $this->hashPassword($newPassword);
        $result = Employee::where('email', 'like', "%". $email . "%")->update(['password'=>$password]);
        
        return $newPassword;
    }
    
    /**
     * randomPassword
     * generates random password when reset password
     * @return string var
     */
    public function randomPassword() {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
    
    /**
     * hashPassword
     * @param type $password
     * @return string
     */
    public function hashPassword($password) {
        $password = password_hash($password, PASSWORD_DEFAULT); // default password reset as user for all user
    
        return $password;
    }
    
    /**
     * add employee
     * @param [] $data
     * 
     * @return employee model
     */
    public function addEmployee($data) {
        $employee = Employee::create([
            'first_name' => $data['first_name'],
            'last_name'  => $data['last_name'],
            'email'         => $data['email'],
            'job_title_id' => $data['job_title_id'],
            'password'    => $this->hashPassword($this->randomPassword()),
            'created_by' => $data['user_id'],
            'created_at' => date('Y-m-d h:i:s')
        ]);        

        return $employee;
    }
    
    /**
     * addEmployeeLocation
     * @param [] $data
     * 
     * @return employee model
     */
    public function addEmployeeLocation($data) {
        $locationIds = trim(implode(", ", $data['location_id']));

        $location = Location::whereIn('id', $data['location_id'])->get();
        
        $employee = Employee::find($data['id']);
        $employee->employee_locations()->attach($location, [
            'created_by' => $data['user_id'],
            'created_date' => date('Y-m-d h:i:s')
        ]);        

        return $employee;
    }    
    
    /**
     * addOrEditEmployeeLocation
     * check for existing location, update or insert if new record found
     * @param type $data
     * @return type
     */
    public function addOrEditEmployeeLocation($data) {
        $locationIds = trim(implode(", ", $data['location_id']));

        $location = Location::whereIn('id', $data['location_id'])->get();
        
        $employee = Employee::find($data['id']);
        
        //insert or update employee_locations fields
        $employee->employee_locations()->sync($data['location_id'], true);        

        return $employee;        
    }
    
    /**
     * detachEmployeeLocation
     * delete employee location if no location 
     * @param type $data
     * @return type
     */
    public function detachAllEmployeeLocation($data) {
        $employee = Employee::find($data['id']);
        $employee->employee_locations()->detach($data['location_id']);        

        return $employee;         
    }
    /**
     * update employee
     * @param [] $data
     * 
     * @return employee model
     */
    public function updateEmployee($data) {
		
        $employee = Employee::find($data['id']);
		
        $employee->first_name = $data['first_name'];
        $employee->last_name = $data['last_name'];
        $employee->email = $data['email'];
        $employee->job_title_id = $data['job_title_id'];
 
        $employee->save();

        return $employee;
    }    
    
    /**
    * delete employee
    * @param [] $data
    * 
    * @return employee model
    */
    public function delete($id) {

        $employee = Employee::with('employee_locations')->find($id);

        // delete if associated employee location found
        $employeeLocation = $this->detachEmployeeLocation($employee);
        
        if($employee){
            $destroy = Employee::destroy($id);
        }

         return $destroy;
    }
    
     /**
     * detachEmployeeLocation
     * delete employee location if no location 
     * @param type $data
     * @return type
     */
    public function detachEmployeeLocation($employee) {
        if(count($employee->employee_locations) > 0) {
            foreach($employee->employee_locations as $locationKey => $locationVal) {
                $locationArray[] = $locationVal['id'];
            }

                $employee->employee_locations()->detach($locationArray); 
        }

        return $employee;         
    }
    
    /**
     * Returns a collection of Location entities
     *
     * @return LocationEntity[]
     */    
    public function searchLocationByIDName()
    {
        
        
    }
    
    /**
     * Returns a collection of Employee and Location entities
     *
     * @return EmployeeEntity[]
     */
    public function searchEmployeeWithLocation($data, $params)
    {
        $eid = $params['eid'];
        $lid = $params['lid'];
        $lname = $params['lname'];
        
        $query = Employee::with('employee_locations')
                    ->where('employees.status',"=",1)
                    ->leftJoin('employee_locations', 'employees.id', '=', 'employee_locations.employee_id')
                    ->Where(function($query) use($params){
                            if(isset($eid) &&  ($eid !== null) ) {
                                $query->where("employees.id", "=", $eid);
                            }
                        });

                        if(($lid !== 0) && ($lid !== "null")) {
                            $locationIds = explode(" ",$lid);
                            $query->whereIn("employee_locations.location_id", $locationIds);
                        }
                        
                        if(isset($lname) && ($lname !== "null")) {
                            $query->leftJoin('locations', 'locations.id', '=', 'employee_locations.location_id');
                            $query->where("locations.location_name", "like", "%$lname%");
                        }
                        
                       // $query->groupBy('employee_locations.employee_id');
                              
                return $query->get();
        }

}
