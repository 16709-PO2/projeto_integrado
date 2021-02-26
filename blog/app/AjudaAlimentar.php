<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;


class AjudaAlimentar extends Model
{
    /// funçao para saber que usauario esta logado no sistema
    public function scopeCurrentUser($query)
    {
        return Auth::user()->hasRole('admin') ? $query : $query->where('owner_id', Auth::user()->id);
    }

    public function save(array $options = [])
    {
        // If no owner has been assigned, assign the current user's id as the owner of the workstation
        if (!$this->owner_id && Auth::user()) {
            $this->owner_id = Auth::user()->getKey();
        }

        return parent::save();
    }
}
