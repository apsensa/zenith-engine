<?php

declare(strict_types=1);

namespace Apsensa\ZenithEngine\Exception;

use Exception;
use Symfony\Component\HttpFoundation\Response;

class AppException extends Exception
{
    private string $type;

    public function __construct(
        string $type,
        $code = Response::HTTP_INTERNAL_SERVER_ERROR
    ) {
        parent::__construct($type, $code);

        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
