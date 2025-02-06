<?php

namespace App\Http\Controllers;



class ApiResponseCntroller extends Controller
{
 
    public static function response_success($data = null, string $message = null, int $status = 200)
    {
        /**
         * Return a success response.
         *
         * @param  mixed  $data
         * @param  string|null  $message
         * @param int $status
         * @return \Illuminate\Http\JsonResponse
         */

        $response = [
            'success' => true,
            'data' => $data,
        ];

        if ($message !== null) {
            $response['message'] = $message;
        }
   
        return response()->json($response, $status);
    }

    public static   function response_error($errors = [], string $message = null, int $status = 400)
    {
        /**
         * Return an error response.
         *
         * @param  array|\Illuminate\Support\MessageBag  $errors
         * @param  string|null  $message
         * @param int $status
         * @return \Illuminate\Http\JsonResponse
         */

        $errorResponse = [
            'success' => false,
        ];

        if ($message !== null) {
            $errorResponse['message'] = $message;
        }

        if (!empty($errors)) {
            $formattedErrors = is_array($errors)
                ? $errors
                : $errors->toArray();

            $errorResponse['errors'] = array_map(function ($error) {
                return [
                    'message' => $error
                ];
            }, $formattedErrors);
        }

        return response()->json($errorResponse, $status);
    }
}
