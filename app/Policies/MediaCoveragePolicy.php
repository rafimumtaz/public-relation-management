<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\MediaCoverage;
use Illuminate\Auth\Access\HandlesAuthorization;

class MediaCoveragePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:MediaCoverage');
    }

    public function view(AuthUser $authUser, MediaCoverage $mediaCoverage): bool
    {
        return $authUser->can('View:MediaCoverage');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:MediaCoverage');
    }

    public function update(AuthUser $authUser, MediaCoverage $mediaCoverage): bool
    {
        return $authUser->can('Update:MediaCoverage');
    }

    public function delete(AuthUser $authUser, MediaCoverage $mediaCoverage): bool
    {
        return $authUser->can('Delete:MediaCoverage');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:MediaCoverage');
    }

    public function restore(AuthUser $authUser, MediaCoverage $mediaCoverage): bool
    {
        return $authUser->can('Restore:MediaCoverage');
    }

    public function forceDelete(AuthUser $authUser, MediaCoverage $mediaCoverage): bool
    {
        return $authUser->can('ForceDelete:MediaCoverage');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:MediaCoverage');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:MediaCoverage');
    }

    public function replicate(AuthUser $authUser, MediaCoverage $mediaCoverage): bool
    {
        return $authUser->can('Replicate:MediaCoverage');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:MediaCoverage');
    }

}