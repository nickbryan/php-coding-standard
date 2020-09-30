<?php

declare(strict_types=1);

trait SomeTrait
{
}

class TestClassStructure
{
    use SomeTrait;

    private const TEST_PRIV = 'priv';
    protected const TEST_PROT = 'prot';

    public const TEST_PUB = 'pub';
    public static string $pubStat;

    private static string $privStat;
    protected static string $protStat;
    public string $pub;

    private string $priv;

    protected string $prot;

    public function __construct()
    {
        // empty for test
    }

    public function __destruct()
    {
        // empty for test
    }

    public function __set(string $name, string $value): void
    {
        $this->{$name} = $value;
    }

    abstract protected static function testAbstractStaticProtected(): void;

    abstract public static function testAbstractStaticPublic(): void;

    private static function testStaticPrivate(): void
    {
        // empty for test
    }

    abstract protected function testAbstractProtected(): void;

    abstract public function testAbstractPublic(): void;

    protected static function testStaticProtected(): void
    {
        // empty for test
    }

    public static function testStaticPublic(): void
    {
        // empty for test
    }

    protected function testProtected(): void
    {
        // empty for test
    }

    private function testPrivate(): void
    {
        // empty for test
    }

    public function testPublic(): void
    {
        // empty for test
    }
}
