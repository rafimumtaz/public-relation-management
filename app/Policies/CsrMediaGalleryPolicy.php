<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\CsrMediaGallery;
use Illuminate\Auth\Access\HandlesAuthorization;

class CsrMediaGalleryPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:CsrMediaGallery');
    }

    public function view(AuthUser $authUser, CsrMediaGallery $csrMediaGallery): bool
    {
        return $authUser->can('View:CsrMediaGallery');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:CsrMediaGallery');
    }

    public function update(AuthUser $authUser, CsrMediaGallery $csrMediaGallery): bool
    {
        return $authUser->can('Update:CsrMediaGallery');
    }

    public function delete(AuthUser $authUser, CsrMediaGallery $csrMediaGallery): bool
    {
        return $authUser->can('Delete:CsrMediaGallery');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:CsrMediaGallery');
    }

    public function restore(AuthUser $authUser, CsrMediaGallery $csrMediaGallery): bool
    {
        return $authUser->can('Restore:CsrMediaGallery');
    }

    public function forceDelete(AuthUser $authUser, CsrMediaGallery $csrMediaGallery): bool
    {
        return $authUser->can('ForceDelete:CsrMediaGallery');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:CsrMediaGallery');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:CsrMediaGallery');
    }

    public function replicate(AuthUser $authUser, CsrMediaGallery $csrMediaGallery): bool
    {
        return $authUser->can('Replicate:CsrMediaGallery');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:CsrMediaGallery');
    }

}