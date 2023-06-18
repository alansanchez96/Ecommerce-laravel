<?php

namespace Src\Modules\Blog\Domain\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Src\Modules\Blog\Domain\Entities\PostEntity;
use Src\Modules\Blog\Infrastructure\Persistence\Post;

interface IPostRepository
{
    public function getActivePosts(int $pages = null): Collection|LengthAwarePaginator;
    
    public function getPost(PostEntity $entity, mixed $post, array $columns): Post;

    public function getRelatedPosts(PostEntity $entity, array $columns): Collection;
}