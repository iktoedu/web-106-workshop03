<?php

namespace ProjectTest\Model;

class StudentListModel
{
    protected $csvPath;

    public function __construct($csvPath)
    {
        $this->csvPath = $csvPath;
    }

    public function getData($id = NULL) {
        $data = [];
        $file = fopen($this->csvPath, 'r');
        while (!feof($file)) {
            $line = fgetcsv($file);
            $data[] = [
                'id' => $line[0],
                'name' => $line[1],
            ];
        }
        fclose($file);

        if ($id) {
            $data = array_filter($data, function ($row) use ($id) {
                return $row['id'] == $id;
            });
        }

        return $data;
    }

}
