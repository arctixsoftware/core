<?php
declare(strict_types=1);

namespace Arctix\Core\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

/**
 * Event
 *
 * @author bu0nq <hello@bu0nq.ru>
 */
abstract class Event
{
    use Dispatchable,
        InteractsWithSockets,
        SerializesModels;
}
