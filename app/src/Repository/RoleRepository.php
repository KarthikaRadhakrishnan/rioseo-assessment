<?php

namespace App\Repository;

use App\Model\Role;
use DomainException;
use InvalidArgumentException;

/**
 * Role repository.
 */
class RoleRepository 
{
    /**
     * Returns a collection of Role entities.
     *
     * @return RoleEntity[]
     */
    public function all()
    {
        $result = Role::all();
        return $result;
    }
    
    /**
     * findRoleById
     * @param int $id
     * @return role JSON [] format array
     */
     public function findRoleById($id)
    {
        $result = Role::find($id);
       
        return $result;   
    }
  
    
    /**
     * add role
     * @param [] $data
     * 
     * @return role model
     */
    public function addRole($data) {
        $role = Role::create([
            'job_title' => $data['job_title']
        ]);        

        return $role;
    }
	
	/**
     * update role
     * @param [] $data
     * 
     * @return role model
     */
    public function updateRole($data) {
		
        $role = Role::find($data['id']);

        $role->job_title = $data['job_title'];

        $role->save();

        return $role;
    }
    
	/**
     * delete role
     * @param [] $data
     * 
     * @return role model
	*/
    public function delete($id) {
        
        $role = Role::find($id);
        if($role){
            $destroy = Role::destroy($id);
        }

         return $destroy;
    }

}
