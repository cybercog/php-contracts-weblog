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

namespace Cog\Contracts\Weblog\Author\Entities;

use Cog\Contracts\Weblog\Authorable\Entities\Authorable;

interface Author
{
    public function getAuthorable(): Authorable;

    public function getBlogs(): iterable;

    public function getPosts(): iterable;

    public function getComments(): iterable;

    public function getId(): string;
}
