<?php

/*
 * This file is part of Weblog PHP Contracts.
 *
 * (c) Anton Komarev <a.komarev@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Cog\Contracts\Weblog\Authorable\Entities;

use Cog\Contracts\Weblog\Author\Entities\Author;

interface Authorable
{
    public function getBlogAuthor(): Author;
}
