<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\BrandAsset;
use Illuminate\Auth\Access\HandlesAuthorization;

class BrandAssetPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:BrandAsset');
    }

    public function view(AuthUser $authUser, BrandAsset $brandAsset): bool
    {
        return $authUser->can('View:BrandAsset');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:BrandAsset');
    }

    public function update(AuthUser $authUser, BrandAsset $brandAsset): bool
    {
        return $authUser->can('Update:BrandAsset');
    }

    public function delete(AuthUser $authUser, BrandAsset $brandAsset): bool
    {
        return $authUser->can('Delete:BrandAsset');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:BrandAsset');
    }

    public function restore(AuthUser $authUser, BrandAsset $brandAsset): bool
    {
        return $authUser->can('Restore:BrandAsset');
    }

    public function forceDelete(AuthUser $authUser, BrandAsset $brandAsset): bool
    {
        return $authUser->can('ForceDelete:BrandAsset');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:BrandAsset');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:BrandAsset');
    }

    public function replicate(AuthUser $authUser, BrandAsset $brandAsset): bool
    {
        return $authUser->can('Replicate:BrandAsset');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:BrandAsset');
    }

}