<?php

/**
 * This file is part of phplrt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phplrt\Parser\Exception;

use Phplrt\Contracts\Parser\Exception\ParserExceptionInterface;

/**
 * Class ParserException
 */
class ParserException extends \Exception implements ParserExceptionInterface
{
}
