<?php

declare(strict_types=1);

namespace Kelesida\Maker\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController
{
    #[Route('/_maker', name: 'dashboard_index')]
    public function index(): JsonResponse
    {
        return new JsonResponse(['result' => 'Hallo!']);
    }
}