# rioseo-assessment
HR - Employee portal, associate more than one location to employees

Login Credentials
****************************
****************************
Manager
*********
vthornley3@blogs.com
Password: manager

Employee
*********
Job Role > 4 - all user login password is same
Password: user

API End Points
*****************
*****************
1.Employee & Location - Display
Method: GET
Full Route: /rioseo-assessment/app/html/api/v1/employees
Description: List all employees available in the system

2.Employee Details - Display
Method: GET
Full Route: /rioseo-assessment/app/html/api/v1/employee/?id=[INTEGER VALUE]
Description: List individual employee information 

3.Employee with Location - Create
Method: POST
Full Route: /rioseo-assessment/app/html/api/v1/employee/create
Description: Create Employee associate with multiple locations selected
Sample Form Data
============================================================
first_name - xxxx
last_name  - yyyy
email      - xxxx@mail.com
job_title_id - 10
location_id  - 23,11,54,2

4.Employee with Location - Update
Method: PUT
Full Route: /rioseo-assessment/app/html/api/v1/employee/update/?id=[INTEGER VALUE]
Description: Update Employee with multiple locations selected
Sample Form Data
=============================================================
first_name - xxxx
last_name  - yyyy
email      - xxxx@mail.com
job_title_id - 6
location_id  - 26,87,65

5. Employee with Location - Delete
Method: DELETE
Full Route: /rioseo-assessment/app/html/api/v1/employee/delete/?id=[VALUE]
Description: Delete Employee with multiple locations selected

6. Location - Display
Method: GET
Full Route: /rioseo-assessment/app/html/api/v1/locations
Description: List all location information

7. Location - Create 
Method: POST
Full Route: /rioseo-assessment/app/html/api/v1/location/create
Description: Create location
Sample Form Data
==============================================================
location_name - xxxx
address  - yyyy
city     - memphis
state - TX
latitude  - 23.3333
longitude - 12.1111
phone - 899.333.3333
country - US
postal_code - 9202

8. Location - Update 
Method: PUT
Full Route: /rioseo-assessment/app/html/api/v1/location/update
Description: Update location
Sample Form Data
===============================================================
location_name - yyyyy
address  - zzzzzzz
city     - Lancaster
state - PA
latitude  - 23.3333
longitude - 12.1111
phone - 899.333.3333
country - US
postal_code - 9202

9. Location - Delete
Method: DELETE
Full Route: /rioseo-assessment/app/html/api/v1/location/delete/?id=[VALUE]
Description: Delete location

10. Employee and Location - Association - Search
Method: Search
Full Route: /rioseo-assessment/app/html/api/v1/search/employee/null/null/LOCATIONID/LOCATIONNAME
Description: Search by location ID and location name
