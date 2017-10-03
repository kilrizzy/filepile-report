<?php

namespace App\Reports;

class _ReportClassName_Report extends BaseReport {

    protected $name = '_ReportClassName_';

    public function getHeaders()
    {
        return [
            'id',
        ];
    }

    public function getResults(){
        $query = \App\User::query();
        $results = $query->get();
        return $results;
    }

    protected function getRowFromResult($result){
        $row = [];
        $row['id'] = $result->id;
        return $row;
    }

}
