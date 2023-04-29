<?php
declare(strict_types=1);

namespace Arctix\Core\Mails;

use Illuminate\Mail\Mailable as LaravelParentMail;
use Illuminate\Queue\SerializesModels;

/**
 * Mail
 *
 * @author bu0nq <hello@bu0nq.ru>
 */
abstract class Mail extends LaravelParentMail
{
    use SerializesModels;
}
