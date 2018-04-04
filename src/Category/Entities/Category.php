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

namespace Cog\Contracts\Weblog\Category\Entities;

use DateTimeInterface as DateTime;

interface Category
{
    public function posts(): iterable;

    public function id(): string;

    public function slug(): string;

    public function name(): string;

    public function createdAt(): DateTime;

    public function updatedAt(): ?DateTime;
}
