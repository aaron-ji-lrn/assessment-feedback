<?php

use App\Http\Controllers\AssessmentController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate', [AssessmentController::class, 'generate']);
Route::get('/assessments/{id}/feedback', [AssessmentController::class, 'getFeedback']);
Route::get('/assessments/{sessionId}/student/{studentId}/feedback', [AssessmentController::class, 'getStudentFeedback']);

Route::get('/feedback/{activityId}/{sessionId}', [AssessmentController::class, 'aiFeedback']);
