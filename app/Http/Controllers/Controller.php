<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $output;
    protected $service;

    /**
     * @param $pagetitle
     * @param $subtitle
     * @param $pageicon
     */
    protected function setPageDate($pagetitle, $subtitle, $pageicon)
    {
        view()->share(['title' => $pagetitle, 'subtitle' => $subtitle, 'pageicon' => $pageicon]);
    }

    /**
     * @param $error_code
     * @param $message
     * @return response
     */
    protected function showErrorPage($error_code = 404, $message = null)
    {
        $data['message'] = $message;
        return response()->view('errors.' . $error_code, $data, $error_code);
    }

    /**
     * @param $status
     * @param $data
     * @return response
     */
    protected function responseJson($status = 'success', $data = null, $response_code = 200, $message = null)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
            'response_code' => $response_code,
        ]);
    }
}
