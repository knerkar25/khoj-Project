<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher; // Add this line
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property string $id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string|null $image_dir
 * @property string|null $image_value
 * @property string|null $role
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
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
      'first_name' => true,
      'last_name' => true,
      'username' => true,
      'password' => true,
      'role' => true,
      'mobile' => true,
      'is_active' => true,
      'is_deleted' => true,
      'created_at' => true,
      'updated_at' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    // protected $_hidden = [
    //     'password',
    // ];
    protected function _setPassword($value)
    {
      if (strlen($value)) {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
      }
    }
}
