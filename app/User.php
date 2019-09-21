<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoleAndPermission;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'age', 'address', 'phone', 'gender', 'provider_id'
    ];

    protected $guarded = ['*'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    protected function getToken()
//    {
//        return hash_hmac('sha256', str_random(40), config('app.key'));
//    }
//
//    public function createActivation($user)
//    {
//
//        $activation = $this->getActivation($user);
//
//        if (!$activation) {
//            return $this->createToken($user);
//        }
//        return $this->regenerateToken($user);
//
//    }
//
//    private function regenerateToken($user)
//    {
//
//        $token = $this->getActivationByToken();
//        User::where('user_id', $user->id)->update([
//            'token' => $token,
//            'created_at' => new Carbon()
//        ]);
//        return $token;
//    }
//
//    private function createToken($user)
//    {
//        $token = $this->getActivationByToken();
//        User::insert([
//            'id' => $user->id,
//            'token' => $token,
//            'created_at' => new Carbon()
//        ]);
//        return $token;
//    }
//
//    public function getActivation($user)
//    {
//        return User::where('id', $user->id)->first();
//    }
//
//    public function getActivationByToken($token)
//    {
//        return User::where('token', $token)->first();
//    }
//
//    public function deleteActivation($token)
//    {
//        User::where('token', $token)->delete();
//    }
}
