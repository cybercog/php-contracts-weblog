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

namespace Cog\Contracts\Weblog\Blog\Entities;

use Cog\Contracts\Weblog\Author\Entities\Author;
use DateTimeInterface as DateTime;

interface Blog
{
    public function getPosts(): iterable;

    public function getOwner(): Author;

    public function getEditors(): iterable;

    public function getWriters(): iterable;

    public function getId(): string;

    public function getSlug(): string;

    public function getName(): string;

    public function getDescription(): ?string;

    public function getCreatedAt(): DateTime;

    public function getUpdatedAt(): ?DateTime;
}
