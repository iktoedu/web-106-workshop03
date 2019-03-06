<?php

namespace ProjectTest\Controller;

use ProjectTest\Model\StudentListModel;
use Symfony\Component\HttpFoundation\Request;

class TestController1
{

    protected $model;

    public function __construct(StudentListModel $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     */
    public function testAction(Request $request) {
        $data = $this->model->getData($request->query->get('id'));
        return ['test1', ['data' => $data]];
    }

}
