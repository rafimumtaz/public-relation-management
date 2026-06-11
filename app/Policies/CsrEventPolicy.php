<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\CsrEvent;
use Illuminate\Auth\Access\HandlesAuthorization;

class CsrEventPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:CsrEvent');
    }

    public function view(AuthUser $authUser, CsrEvent $csrEvent): bool
    {
        return $authUser->can('View:CsrEvent');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:CsrEvent');
    }

    public function update(AuthUser $authUser, CsrEvent $csrEvent): bool
    {
        return $authUser->can('Update:CsrEvent');
    }

    public function delete(AuthUser $authUser, CsrEvent $csrEvent): bool
    {
        return $authUser->can('Delete:CsrEvent');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:CsrEvent');
    }

    public function restore(AuthUser $authUser, CsrEvent $csrEvent): bool
    {
        return $authUser->can('Restore:CsrEvent');
    }

    public function forceDelete(AuthUser $authUser, CsrEvent $csrEvent): bool
    {
        return $authUser->can('ForceDelete:CsrEvent');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:CsrEvent');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:CsrEvent');
    }

    public function replicate(AuthUser $authUser, CsrEvent $csrEvent): bool
    {
        return $authUser->can('Replicate:CsrEvent');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:CsrEvent');
    }

}