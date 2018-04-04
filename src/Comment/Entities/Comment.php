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

namespace Cog\Contracts\Weblog\Comment\Entities;

use Cog\Contracts\Weblog\Author\Entities\Author;
use Cog\Contracts\Weblog\Post\Entities\Post;
use DateTimeInterface as DateTime;

interface Comment
{
    public function post(): Post;

    public function author(): Author;

    public function id(): string;

    public function content(): string;

    public function createdAt(): DateTime;

    public function updatedAt(): ?DateTime;
}
