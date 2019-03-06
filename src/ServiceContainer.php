<?php

namespace ProjectTest;

use ProjectTest\Controller\TestController1;
use ProjectTest\Controller\TestController2;
use ProjectTest\Model\StudentListModel;

class ServiceContainer
{

    public function getTestController1() {
        return new TestController1($this->getStudentListModel());
    }

    public function getTestController2() {
        return new TestController2();
    }

    public function getStudentListModel() {
        return new StudentListModel(__DIR__ . '/../test.csv');
    }

    public function getViewRenderer() {
        static $viewRenderer = NULL;
        if (!$viewRenderer) {
            $viewRenderer = new ViewRenderer(__DIR__ . '/../templates');
        }

        return $viewRenderer;
    }

}
