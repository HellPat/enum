<?php

declare(strict_types=1);

namespace HellPat\Enum\Stubs;

use HellPat\Enum\Option;

/**
 * @psalm-immutable
 */
class OptionStub extends Option
{
    /**
     * When an Enum is only internat to the Application there
     * is no need to specify a "name". Since the Methode-Name
     * is unique per class, the Methods-Name will do as an
     * Identifier to the Enum-Value.
     *
     * @return static
     */
    public static function SUCCESS()
    {
        return self::getInstance(__METHOD__);
    }

    /**
     * If you want to use an own name for the Enum this is fine.
     * You have to take care of the Uniqueness for the identifier.
     *
     * @return static
     */
    public static function FAILURE()
    {
        return self::getInstance(__METHOD__);
    }

    /**
     * @return static
     */
    public static function camelFailure()
    {
        return self::getInstance(__METHOD__);
    }

    /**
     * @return static
     */
    public static function small_snake_failure()
    {
        return self::getInstance(__METHOD__);
    }
}
