<?php namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable 
{
    use Notifiable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function getPasswordAttribute($password)
    {
        return $this->attributes['password'] = bcrypt($password);
    }

    public static function register(array $data)
    {
        // Fake when saving data

        $user = new User;

        $user->fill([
            'name' => trim($data['name']),
            'email' => filter_var($data['email'], FILTER_SANITIZE_EMAIL),
            'password' => $data['password'],
        ]);

        return $user;
    }
}
