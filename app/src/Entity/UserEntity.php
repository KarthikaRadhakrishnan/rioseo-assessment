<?php

namespace App\Entity;

/**
 * User entity.
 */
class UserEntity extends AbstractEntity
{
    /** @var int */
    public $id;
    
    /** @var string */
    public $firstName;

    /** @var string */
    public $lastName;

    /** @var string */
    public $email;
    
    /** @var string */
    public $jobTitleId;

    /** @var string */
    public $password;

    /** @var int */
    public $status;
    
    /** @var int */
    public $createdBy;
    
    /** @var int*/
    public $createdAt;

}
