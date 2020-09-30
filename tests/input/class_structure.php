<?php

declare(strict_types=1);

trait SomeTrait {}

class TestClassStructure
{
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

    protected static function testStaticProtected(): void
    {
        // empty for test
    }

    private static function testStaticPrivate(): void
    {
        // empty for test
    }

    public static function testStaticPublic(): void
    {
        // empty for test
    }

    abstract protected function testAbstractProtected(): void;
    abstract public function testAbstractPublic(): void;

    abstract static protected function testAbstractStaticProtected(): void;
    abstract static public function testAbstractStaticPublic(): void;

    public function __set(string $name, string $value): void
    {
        $this->{$name} = $value;
    }

    public function __destruct()
    {
        // empty for test
    }

    public function __construct()
    {
        // empty for test
    }

    public string $pub;
    private string $priv;
    protected string $prot;

    public static string $pubStat;
    private static string $privStat;
    protected static string $protStat;

    protected const TEST_PROT = 'prot';
    private const TEST_PRIV = 'priv';
    public const TEST_PUB = 'pub';

    use SomeTrait;
}
