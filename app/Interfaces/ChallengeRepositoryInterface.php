<?php

namespace App\Interfaces;

interface ChallengeRepositoryInterface 
{
    public function getAllChallenge();
    public function getChallengeById($challengeId);
    public function createChallenge(array $challengeDetails);
    public function updateChallenge($challengeId, array $newDetails);
    public function deleteChallenge($challengeId);
   
}

