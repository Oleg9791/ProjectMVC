<?php
//print_r($this->data);

use W1020\HTML\Pagination;
use W1020\HTML\Table;

unset($this->data["comments"]['del']);
unset($this->data["comments"]['edit']);
echo (new Table())
    ->setData($this->data["table"])
    ->setHeaders($this->data["comments"])
    ->addColumn(fn($row) => "<a href='?type={$this->data['controllerName']}&action=showedit&id=$row[id]'>✏</a>")
    ->setClass("table table-striped table-hover")
    ->html();
echo (new Pagination())
    ->setUrlPrefix("?type={$this->data['controllerName']}&action=show&page=")
    ->setPageCount($this->data["pageCount"])
    ->setActivePage($this->data["activePage"])
    ->html();
?>

