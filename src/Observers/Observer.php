<?php
declare(strict_types=1);

namespace Arctix\Core\Observers;

use Arctix\Support\Traits\HasPasswordTrait;
use Arctix\Support\Traits\HasSlugTrait;

/**
 * Observer
 *
 * @author bu0nq <hello@bu0nq.ru>
 */
abstract class Observer
{
    use HasPasswordTrait,
        HasSlugTrait;
}
