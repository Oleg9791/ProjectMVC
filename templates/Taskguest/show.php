<?php

use W1020\HTML\Pagination;
use W1020\HTML\Table;

unset($this->data["comments"]['del']);
unset($this->data["comments"]['edit']);
foreach ($this->data["table"] as &$row) {
    $row['start_date'] = date("d.m.Y H:i", strtotime($row['start_date']));
    $row['end_date'] = date("d.m.Y H:i", strtotime($row['end_date']));
    $row['customer_id'] = "​👥​💬​";
}
echo (new Table())
    ->setData($this->data["table"])
    ->setHeaders($this->data["comments"])
    ->setClass("table table-striped table-hover")
    ->html();
echo (new Pagination())
    ->setUrlPrefix("?type={$this->data['controllerName']}&action=show&page=")
    ->setPageCount($this->data["pageCount"])
    ->setActivePage($this->data["activePage"])
    ->html();


