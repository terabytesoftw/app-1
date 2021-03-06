<?php

declare(strict_types=1);

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class SiteController extends AbstractController
{
    protected function name(): string
    {
        return 'site';
    }

    public function index(ServerRequestInterface $request): ResponseInterface
    {
        return $this->render(
            'index',
            [
                'csrf' => $request->getAttribute('csrf_token')
            ]
        );
    }
}
