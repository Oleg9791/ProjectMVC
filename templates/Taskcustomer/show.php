<?php

use W1020\HTML\Pagination;
use W1020\HTML\Table;

unset($this->data["comments"]['del']);
foreach ($this->data["table"] as &$row) {
    $row['start_date'] = date("d.m.Y H:i", strtotime($row['start_date']));
    $row['end_date'] = date("d.m.Y H:i", strtotime($row['end_date']));
    $row['customer_id'] = $_SESSION['user']['name'];
}
echo (new Table())
    ->setData($this->data["table"])
    ->setHeaders($this->data["comments"])
    ->addColumn(fn($row) => "<a href='?type={$this->data['controllerName']}&action=showedit&id=$row[id]'>🖍</a>")
    ->setClass("table table-striped table-hover")
    ->html();
echo (new Pagination())
    ->setUrlPrefix("?type={$this->data['controllerName']}&action=show&page=")
    ->setPageCount($this->data["pageCount"])
    ->setActivePage($this->data["activePage"])
    ->html();
?>

<a href="?type=<?= $this->data['controllerName'] ?>&action=showadd" id="add" class="btn btn-primary">Добавить
    задание</a>
