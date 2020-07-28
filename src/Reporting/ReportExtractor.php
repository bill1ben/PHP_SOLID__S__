<?php

namespace App\Reporting;

use App\Reporting\Format\HtmlFormater;
use App\Reporting\Format\JsonFormater;

class ReportExtractor
{

    /**
     * Doit afficher l'ensemble des formats possibles pour un rapport en se servant
     * des formatters ajoutés dans le tableau
     *
     * @param Report $report
     *
     * @return array
     */
    public function process(Report $report): array
    {
        $reportResult= [];

        $formater = new HtmlFormater();
        $reportResult[] = $formater->FormaToHtml($report);

        $formater = new jsonFormater();
        $reportResult[] = $formater->formatToJSON($report);

        return $reportResult;
    }
}
