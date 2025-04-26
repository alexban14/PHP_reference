<?php

/*
 * Single Responsibility Principle
 *
 * A class / method must a specific purpose.
 *  1. a reason to change
 *  2. a unique responsibility
 */
interface Report
{
    public function getTitle();
    public function getDate();
    public function getHeaders();
    public function getBody();
}

interface ReportFormatter
{
    public function format(Report $report): string;
}

class HtmlReportFormatter implements ReportFormatter
{
    public function format(Report $report): string
    {
        $output = '';
        // ...

        return $output;
    }
}
