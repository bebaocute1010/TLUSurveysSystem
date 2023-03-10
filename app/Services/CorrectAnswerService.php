<?php

namespace App\Services;

use App\Repositories\CorrectAnswerRepository;

class CorrectAnswerService
{
    private $correct_answer_repo;

    public function __construct(CorrectAnswerRepository $correct_answer_repo)
    {
        $this->correct_answer_repo = $correct_answer_repo;
    }

    public function create(array $data)
    {
        return $this->correct_answer_repo->create($data);
    }

    public function update(array $data)
    {
        return $this->correct_answer_repo->update($data);
    }
    
    public function delete(int $data)
    {
        return $this->correct_answer_repo->delete($data);
    }
}