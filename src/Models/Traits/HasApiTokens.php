<?php
declare(strict_types=1);

namespace Arctix\Core\Models\Traits;

use Laravel\Sanctum\HasApiTokens as LaravelParentTrait;

/**
 * HasApiTokens
 *
 * @author bu0nq <hello@bu0nq.ru>
 */
trait HasApiTokens
{
    use LaravelParentTrait;
}
