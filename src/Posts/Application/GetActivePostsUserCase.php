<?php

namespace Src\Posts\Application;

use Src\Posts\Domain\Contracts\PostRepositoryContract;
use Src\Posts\Infrastructure\Eloquent\Repositories\PostRepository;

class GetActivePostsUserCase
{
    private $repository;

    public function __construct(PostRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function execute($column, $pages)
    {
        return $this->repository->getActivePosts($column, $pages);
    }
}