<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $user_id
 * @property string $email
 * @property string $password
 * @property string $mobile_number
 * @property string $first_name
 * @property string $last_name
 * @property string $profile_fields
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'email' => true,
        'password' => true,
        'mobile_number' => true,
        'first_name' => true,
        'last_name' => true,
        'profile_fields' => true,
        'DOB' => true,
        'postcode' => true,
        'role' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    // Hash password method
    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }

    /*
    // Unhash password method
    protected function _getPassword() : ?string
    {
        $hashedpassword = $this->Authentication->Identity->getIdentity()->get('password');
        return (new DefaultPasswordHasher())->unhash($hashedpassword);
    }
    */
}
