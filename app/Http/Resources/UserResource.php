<?php

namespace App\Http\Resources;

use App\Mail\AdminNotifyNewUserRegistered;
use App\Mail\NewUserRegistered;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Mail;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'first_name'              =>$this->first_name,
            'last_name'               =>$this->last_name,
            'user_account'            =>$this->account_selection,
            'user_email'              =>$this->email,
            'user_id'                 =>$this->id,
        ];




    }
}
