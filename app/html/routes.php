<?php
use Slim\Container;

/*
** Define the Slim application routes.
*/
$app->get('/', "Home:index")->setName('home');

/**
 * Login/Logout Routes
 */
$app->get('/login', "Login:index")->setName('login');
$app->post('/loginSubmit', "Login:login")->setName('loginSubmit');
$app->get('/logout', "Login:logout")->setName('logout');
$app->get('/resetPassword', "Login:resetPassword")->setName('resetPassword');
$app->post('/changePassword', "Login:changePassword")->setName('changePassword');
 
// Admin group
$app->group('/admin', function () use ($app) {
$app->get('/login', "AdminLogin:index")->setName('adminLogin');
$app->post('/loginSubmit', "AdminLogin:login")->setName('adminLoginSubmit');
$app->get('/logout', "AdminLogin:logout")->setName('adminLogout');
$app->get('/resetPassword', "AdminLogin:resetPassword")->setName('adminResetPassword');
$app->post('/changePassword', "AdminLogin:changePassword")->setName('adminChangePassword');
$app->get('/dashboard', 'Admin:index')->setName('admin');
//Employee
 $app->get('/employees', 'Employee:getEmployeesList')->setName('employeeList');
 $app->get('/create/employee', 'Employee:addEmployeeForm')->setName('createEmployee'); 
  $app->post('/create/employee', 'Employee:addEmployeeAction')->setName('employeeAddAction'); 
 $app->get('/update/employee/{id}', 'Employee:editEmployeeForm')->setName('editEmployee'); 
 $app->post('/update/employee/{id}', 'Employee:editEmployeeAction')->setName('employeeEditAction'); 
  $app->get('/delete/employee/{id}', 'Employee:deleteEmployee')->setName('deleteEmployee'); 
//Location
 $app->get('/locations', 'Location:getLocationList')->setName('locationList');
 $app->get('/create/location', 'Location:addLocationForm')->setName('createLocation'); 
 $app->post('/create/location', 'Location:addLocationAction')->setName('locationAddAction'); 
 $app->get('/update/location/{id}', 'Location:editLocationForm')->setName('editLocation'); 
 $app->post('/update/location/{id}', 'Location:editLocationAction')->setName('locationEditAction'); 
  $app->get('/delete/location/{id}', 'Location:deleteLocation')->setName('deleteLocation'); 
//Role
 $app->get('/roles', 'Role:getRolesList')->setName('rolesList');
 $app->get('/create/role', 'Role:addRoleForm')->setName('createRole'); 
 $app->post('/create/role', 'Role:addRoleAction')->setName('roleAddAction'); 
 $app->get('/update/role/{id}', 'Role:editRoleForm')->setName('editRole');
$app->post('/update/role/{id}', 'Role:editRoleAction')->setName('roleEditAction'); 
  $app->get('/delete/role/{id}', 'Role:deleteRole')->setName('deleteRole'); 
});

// API group
$app->group('/api', function () use ($app) {
    // Version group
    $app->group('/v1', function () use ($app) {
            $app->get('/employees', 'EmployeeApi:getEmployees');
            $app->get('/employee/{id}', 'EmployeeApi:getEmployeeById');
            $app->get('/search/employee[/{eid}[/{ename}[/{lid}[/{lname}]]]]', 'EmployeeApi:getEmployeeWithLocation');
            $app->post('/employee/create', 'EmployeeApi:addEmployee');
             $app->put('/employee/update/{id}', 'EmployeeApi:updateEmployee');
            $app->delete('/employee/delete/{id}', 'EmployeeApi:deleteEmployee');
            $app->get('/locations', 'LocationApi:getLocations');
            $app->post('/location/create', 'LocationApi:addLocation');
            $app->put('/location/update/{id}', 'LocationApi:updateLocation');
            $app->delete('/location/delete/{id}', 'LocationApi:deleteLocation');
            
        });
});

