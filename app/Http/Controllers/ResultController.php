<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;
use App\Services\ResultService;
use App\Services\ResponseService;

use App\Models\Result;

class ResultController extends Controller
{
    private $result_service;
    private $response;

    public function __construct(ResultService $result_service, ResponseService $response)
    {
        $this->result_service = $result_service;
        $this->response= $response;
    }

    public function index(Request $request)
    {
        $survey = Survey::find($request->survey_id);
        return view('contactform')->with(['survey'=>$survey]);
    }

    public function create(Request $request)
    {
        dd($request);
        try {
            $this->result_service->create($request->only('survey_id'));
            return $this->response->success('create result success !');
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }
}
