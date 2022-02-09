<?php

namespace App\Http\Controllers;

use App\Interfaces\ChallengeRepositoryInterface;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ChallengeRequest;
use Illuminate\Http\Response;

use Illuminate\Http\Request;


class ChallengeController extends Controller
{
    private ChallengeRepositoryInterface $challengeRepository;

    public function __construct(ChallengeRepositoryInterface $challengeRepository) 
    {
        $this->challengeRepository = $challengeRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json(
            [
                'data' => $this->challengeRepository->getAllChallenge()
            ],
            Response::HTTP_OK
        );
    }

    public function show($id): JsonResponse 
    {
        return response()->json(
            [
                'data' => $this->challengeRepository->getChallengeById($id)
            ],
            Response::HTTP_OK
        );
    }

    public function store(ChallengeRequest $request): JsonResponse 
    {
        return response()->json(
            [
                'data' => $this->challengeRepository->createChallenge($request->all())
            ],
            Response::HTTP_CREATED
        );
    }

    public function update($id, ChallengeRequest $request)
    {
        $this->challengeRepository->updateChallenge($id, $request->all());
        
        return response()->json(
            [
             'data' => $this->challengeRepository->getChallengeById($id)
            ],
            Response::HTTP_OK
        );
    }
}
