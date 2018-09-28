<?php

namespace App\Service\User;

use App\Entity\UserEntity;
use Adbar\Session;
use PDO;
use RuntimeException;

/**
 * Authentication and authorization.
 */
class Auth
{
    /**
     * Session.
     *
     * @var Session
     */
    private $session;

    /**
     * @var PDO
     */
    private $pdo;

    /**
     * UserSession constructor.
     *
     * @param Session $session Storage
     * @param PDO $pdo PDO database connection
     */
    public function __construct(Session $session, PDO $pdo)
    {
        $this->session = $session;
        $this->pdo = $pdo;
    }

    /**
     * Returns true if and only if an identity is available from storage.
     *
     * @return bool
     */
    public function hasIdentity()
    {
        return !empty($this->session->get('user'));
    }

    /**
     * Clears the identity from persistent storage.
     *
     * @return void
     */
    public function clearIdentity()
    {
        $this->session->clear('user');

        // Clears all session data and regenerates session ID
        $this->session->destroy();

    }

    /**
     * Get user Id.
     *
     * @return int User Id
     */
    public function getId(): int
    {
        $result = $this->getIdentity()->id;

        if (empty($result)) {
            throw new RuntimeException(__('Invalid or empty User-ID'));
        }

        return $result;
    }

    /**
     * Returns the identity from storage or null if no identity is available.
     *
     * @return UserEntity
     */
    public function getIdentity(): UserEntity
    {
        $user = $this->session->get('user');
        if (!$user) {
            throw new RuntimeException('No identity available');
        }

        return $user;
    }

    /**
     * Performs an authentication attempt.
     *
     * @param string $email
     * @param string $password
     *
     * @return UserEntity|null
     */
    public function authenticate(string $email, string $password)
    {
        $email = "%". $email . "%";
        $statement = $this->pdo->prepare('SELECT * FROM employees WHERE email LIKE :email AND status = 1');
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();
        //$total = $statement->rowCount();
        $userRow = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$userRow) {
           // $this->session->set('user.loginError', 'Account doesn\'t exists');
            //$this->session->set('user.loginErrorClass', 'badge badge-danger');
            return null;
        }

        $user = new UserEntity($userRow);

        if (!$this->verifyPassword($password, $user->password)) {
            return null;
        }

        $this->startUserSession($user);

        return $user;
    }

    /**
     * Returns true if password and hash is valid.
     *
     * @param string $password
     * @param string $hash
     *
     * @return bool Success
     */
    public function verifyPassword(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }

    /**
     * Init user session.
     *
     * @param UserEntity $user
     *
     * @return void
     */
    protected function startUserSession(UserEntity $user)
    {
        $this->session->set('user.id', $user->id);
        $this->session->set('user.email', $user->email);
        $this->session->set('user.firstName', $user->firstName);
        $this->session->set('user.lastName', $user->lastName);
        $this->session->set('user.status', $user->status);
        $this->session->set('user.jobTitleId', $user->jobTitleId);
    }

    /**
     * Set the identity into storage or null if no identity is available.
     *
     * @param UserEntity $user
     *
     * @return void
     */
    public function setIdentity(UserEntity $user)
    {
        $this->session->set('user.id', $user->id);
    }

    /**
     * Returns secure password hash.
     *
     * @param string $password
     *
     * @return string
     */
    public function createPassword($password): string
    {
        return password_hash($password, 1) ?: '';
    }

    /**
     * Check user permission.
     *
     * @param string|array $role (e.g. 'ROLE_ADMIN' or 'ROLE_USER')
     * or array('ROLE_ADMIN', 'ROLE_USER')
     *
     * @return bool Status
     */
    public function hasRole($role): bool
    {
        // Current user role
        $userRole = $this->getIdentity()->role;

        // Full access for admin
        if ($userRole === Role::ROLE_ADMIN) {
            return true;
        }
        if ($role === $userRole) {
            return true;
        }
        if (is_array($role) && in_array($userRole, $role)) {
            return true;
        }

        return false;
    }
}
