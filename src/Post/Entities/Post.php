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
    public function blog(): Blog;

    public function category(): ?Category;

    public function author(): Author;

    public function comments(): iterable;

    public function id(): string;

    public function slug(): string;

    public function title(): string;

    public function subtitle(): ?string;

    public function excerpt(): ?string;

    public function content(): ?string;

    public function createdAt(): DateTime;

    public function updatedAt(): ?DateTime;

    public function publishedAt(): ?DateTime;
}
