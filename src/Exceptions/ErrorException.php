<?php
namespace Http\Exceptions;

use InvalidArgumentException;

class ErrorException extends InvalidArgumentException implements ExceptionInterface
{
}
