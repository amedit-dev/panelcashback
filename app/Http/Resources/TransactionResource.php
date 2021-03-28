<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use function Sodium\increment;

class TransactionResource extends JsonResource
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
            'responsive_id' => '',
            'id' => $this->id,
            'position' => $this->position,
            'transactions' => $this->transactions,
            'nickname' => $this->when(User::find($this->user_id), function () {
               $user = User::find($this->user_id);
               return $user['nickname'];
            }),
//                $this->when(User::find($this->user_id)->first(), function () {
//                 $user = User::find($this->user_id)->get();
//                 return $user->nickname;
//            }),
            'screenshot' => $this->screenshot,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }


}
