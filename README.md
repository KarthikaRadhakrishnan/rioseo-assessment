## Instillation
 1. Install [git.](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
 2. Install Docker for [Mac](https://docs.docker.com/docker-for-mac/install/), or for [Windows](https://docs.docker.com/docker-for-windows/install/).
 3. Clone this [project](https://github.com/rioseo/code-assessment-php) project that is based off of the [Slim Framework](https://www.slimframework.com/)
 4. Install dependencies with Composer
    * Install [Composer](https://symfony.com/doc/2.5/cookbook/composer.html) locally and run composer install for the project.
    * Or Run Composer from [Docker](https://docs.docker.com/samples/library/composer/).

## Project
The company has data for their locations and employees but does not have a clean record of which employees work at which locations. HR has requested a software solution for assigning the employees to locations.
 1. Initialize your database using the files in the "data" directory
 2. We have the data of locations and employees but need an interface for assigning employees to the location(s) that they work at. Design a simple employee manager system with the following parameters:
    * All employees are associated to a single job title.
    * Employees can be assigned to more than one location.
 3. Develop a RESTful API to display, create, and update and delete locations and associated personnel.
    * The api display should allow filtering to get location by id and name.
    * Build an object oriented solutions.

## Bonus Points
 1. Add a simple front end for bonus points.
 2. Completeness counts. Don't forget the stuff you would do for a normal project (like tests and formatting).
 3. Create tests for QA (i.e. unit, Postman).
 4. Track your work with Git.
  
## Submission
Ask any questions as these requirements may not be complete. When ready, submit your results in either a Git patch file, a link to an accessablie Git repo, or a simple zip file.