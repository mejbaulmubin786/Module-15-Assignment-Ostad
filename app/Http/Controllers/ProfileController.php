<?php

namespace App\Http\Controllers;

class ProfileController extends Controller {
    // The index method receives the $id from the route
    public function index($id) {
        // Declare variables with values
        $name = "Donal Trump";
        $age = "75";

        // Create the associative array with id, name, and age
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set cookie as per the question's specifications
        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Return response with data, status code 200, and the cookie
        return response()->json($data, 200)
            ->cookie($cookie_name, $cookie_value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
