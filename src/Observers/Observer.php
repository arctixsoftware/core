<?php
declare(strict_types=1);

namespace Arctix\Core\Observers;

use Arctix\Support\Facades\Hash;

/**
 * Observer
 *
 * @author bu0nq <hello@bu0nq.ru>
 */
abstract class Observer
{
    /**
     * @param string $password
     *
     * @return string
     */
    protected function makePassword(
        string $password
    ) : string {
        return Hash::make($password);
    }
}
