<?php

declare(strict_types=1);

/**
 * Copyright (c) 2019 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/localheinz/playground
 */

namespace Localheinz\Playground\Test\Unit;

use Localheinz\Playground\Example;
use Localheinz\Test\Util\Helper;
use PHPUnit\Framework;

/**
 * @internal
 *
 * @covers \Localheinz\Playground\Example
 */
final class ExampleTest extends Framework\TestCase
{
    use Helper;

    public function testFromNameReturnsExample(): void
    {
        $name = $this->faker()->sentence;

        $example = Example::fromName($name);

        self::assertSame($name, $example->name());
    }
}
