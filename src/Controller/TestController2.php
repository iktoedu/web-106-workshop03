<?php

namespace ProjectTest\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController2
{

    public function testAction(Request $request) {
        return new Response(print_r($request->query->all(), TRUE));
    }

}
