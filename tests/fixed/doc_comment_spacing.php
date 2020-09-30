<?php

declare(strict_types=1);

namespace Test;

use BarException;
use FooException;

class Test
{
    /**
     * Description
     */
    public function a(): void
    {
    }

    /**
     * Description
     * More Description
     * Even More Description
     */
    public function b(): void
    {
    }

    /**
     * First Paragraph Description
     *
     * Second Paragraph Description
     *
     * @param int[] $foo
     *
     * @throws FooException
     */
    public function c(iterable $foo): void
    {
    }

    /**
     * Description
     * More Description
     *
     * @internal
     * @deprecated
     *
     * @link https://example.com
     * @see  other
     * @uses other
     *
     * @param int[] $foo
     * @param int[] $bar
     * @return int[]
     *
     * @throws FooException
     * @throws BarException
     *
     * @ORM\Id
     * @ODM\Id
     * @PHPCR\Uuid
     * @PHPCR\Field
     * @ODM\Column
     * @ORM\Column
     */
    public function d(iterable $foo, iterable $bar): iterable
    {
    }
}
