<?php

namespace App\Repositories;

use App\Interfaces\ChallengeRepositoryInterface;
use App\Models\Challenge;

class ChallengeRepository implements ChallengeRepositoryInterface 
{
    public function getAllChallenge() 
    {
        return Challenge::all();
    }

    public function getChallengeById($challengeId) 
    {
        return Challenge::findOrFail($challengeId);
    }

    public function createChallenge(array $orderDetails) 
    {
        return Challenge::create($orderDetails);
    }

    public function updateChallenge($challengeId, array $newDetails) 
    {
        return Challenge::whereId($challengeId)->update($newDetails);
    }

    public function deleteChallenge($challengeId) 
    {
        Challenge::destroy($challengeId);
    }

    
}
