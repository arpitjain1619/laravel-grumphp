<?php

namespace App\Http\Controllers;

use App\Services\PhpCsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PhpCsController extends Controller
{
    public function __construct(protected PhpCsService $phpCsService)
    {
    }

    public function index(): JsonResponse {
        $user = $this->phpCsService->get();

        return response()->json(
            [
                'message' => 'success',
                'status' => Response::HTTP_OK,
                'user' => $user,
            ],
            Response::HTTP_OK
        );
    }
}
