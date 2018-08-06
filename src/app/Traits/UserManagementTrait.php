<?php

namespace VCComponent\Laravel\User\Traits;

trait UserManagementTrait
{
    public function ableToShow($id)
    {
        return true;
    }

    public function ableToCreate()
    {
        return true;
    }

    public function ableToUpdate($id)
    {
        return true;
    }

    public function ableToDelete($id)
    {
        return true;
    }
}
