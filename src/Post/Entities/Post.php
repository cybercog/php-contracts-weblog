<?php

/*
 * This file is part of Weblog Contracts.
 *
 * (c) Anton Komarev <a.komarev@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Cog\Contracts\Weblog\Post\Entities;

use Cog\Contracts\Weblog\Author\Entities\Author;
use Cog\Contracts\Weblog\Blog\Entities\Blog;
use Cog\Contracts\Weblog\Category\Entities\Category;
use DateTimeInterface as DateTime;

interface Post
{
    public function getBlog(): Blog;

    public function getCategory(): ?Category;

    public function getAuthor(): Author;

    public function getComments(): iterable;

    public function getId(): string;

    public function getSlug(): string;

    public function getTitle(): string;

    public function getSubtitle(): ?string;

    public function getExcerpt(): ?string;

    public function getContent(): ?string;

    public function getCreatedAt(): DateTime;

    public function getUpdatedAt(): ?DateTime;

    public function getPublishedAt(): ?DateTime;
}
