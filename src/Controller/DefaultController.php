<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index(): Response
    {
        return new Response(
            '<html>
                <body>
                    <h1>Hello World !</h1>
                    <p>Lorem ispum dolorem</p>
                </body>
            </html>'
        );
    }
}