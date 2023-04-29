<?php
declare(strict_types=1);

namespace Arctix\Core\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

/**
 * Rule
 *
 * @author bu0nq <hello@bu0nq.ru>
 */
abstract class Rule implements ValidationRule
{
    /**
     * @param Closure(string): PotentiallyTranslatedString $fail
     */
    abstract public function validate(
        string $attribute, mixed $value, Closure $fail
    ) : void;
}
