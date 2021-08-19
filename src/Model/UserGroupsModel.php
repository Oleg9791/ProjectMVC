<?php

namespace App\Model;

use W1020\Table as ORMTable;

class UserGroupsModel extends ORMTable
{
    public function getNameGroup(): array
    {
        $data = $this->query("SELECT `id`, `code` FROM `user_groups`");
        $arr = [];
        foreach ($data as $row) {
            $arr[$row['id']] = $row['code'];
        }
        return $arr;
    }
}