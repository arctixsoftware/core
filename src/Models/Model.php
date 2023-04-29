<?php
declare(strict_types=1);

namespace Arctix\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as LaravelParentModel;

/**
 * Model
 *
 * @author bu0nq <hello@bu0nq.ru>
 */
abstract class Model extends LaravelParentModel
{
    use HasFactory;
}
