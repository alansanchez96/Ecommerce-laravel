<?php

namespace Src\Tags\Domain\Contract;

use Src\Tags\Infrastructure\Eloquent\TagModel;

interface TagRepositoryContract
{
    public function getPostsRelatedToTags(TagModel $tag);

    public function getAllTags(bool $pluck = false, string $column = null, mixed $key = null);

    public function getTag($slug);

    public function save($reqName, $reqSlug, $reqColor, int $id = null);

    public function deleteTag(int $id);
}
