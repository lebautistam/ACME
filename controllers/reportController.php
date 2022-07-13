<?php
require_once 'models/report.php';
class reportController
{

    public function index()
    {
        require_once 'views/report/see.php';
    }

    public function see()
    {
        $report=new report();
        $view_report=$report->getReport();
    
        if($view_report)
        {
            // while($re=$view_report->fetch_object()){
            //     var_dump($re);
            //     die();
                
            // }
            require_once 'views/report/see.php';
        }
    }
}