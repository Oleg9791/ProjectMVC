<?php
//print_r($_SESSION);

//print_r($this->data);

use W1020\HTML\Select; ?>
<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            <form action="<?= $this->data['action'] ?>" method="post">
                <?php
                foreach ($this->data["comments"] as $field => $value) {
                    echo $value . "<br>";
                    if ($field == 'start_date' || $field == 'end_date' and empty($this->data['row'][$field])) {
                        echo "<input class='form-control form-group' type='datetime-local' name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";

                    } elseif ($field == 'start_date' || $field == 'end_date' and !empty($this->data['row'][$field])) {
                        echo "<input class='form-control form-group' name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";

                    } elseif ($field == "users_id") {
                        echo (new Select())
                                ->setName($field)
                                ->setData($this->data["loginList"])
                                ->setSelected($this->data["row"]['users_id'] ?? "")
                                ->html() . '<br>';

                    }
                    elseif ($field == "performance") {
                        echo (new Select())
                                ->setName($field)
                                ->setData([
                                    "выполнено" => "выполнено",
                                    "не выполнено" => "не выполнено"
                                ])
                                ->setSelected($this->data["row"]['performance'] ?? "")
                                ->html() . '<br><br>';
                    } else {
                        echo "<textarea class='form-control form-group' name='$field' value=> " . ($this->data['row'][$field] ?? "") . "</textarea><br>";
                    }
                }
                ?>
                <input type="submit" value="ok" class="btn btn-primary">
            </form>

        </div>
        <div class="col">

        </div>
    </div>
</div>
