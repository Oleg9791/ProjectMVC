<?php

use W1020\HTML\Select;

?>
<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            <form action="<?= $this->data['action'] ?>" method="post">
                <?php
                foreach ($this->data["comments"] as $field => $value) {

                    if (($field == 'start_date' || $field == 'end_date') and empty($this->data['row'][$field])) {
                        echo $value . "<br>";

                        echo "<input class='form-control form-group' type='datetime-local' name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";

                    } elseif (($field == 'start_date' || $field == 'end_date') and !empty($this->data['row'][$field])) {
                        echo $value . "<br>";
                        $date = date("Y-m-d\TH:i:s", strtotime($this->data['row'][$field]));
                        echo "<input class='form-control form-group' type='datetime-local' name='$field' value='" . ($date ?? "") . "'><br>";

                    } elseif ($field == 'customer_id' and ($_SESSION['user']['code'] == 'customer')) {
                        echo "<input type='hidden' name='$field' value='" . ($_SESSION['user']['id']) . "'><br>";
                    } elseif ($field == "users_id") {
                        echo $value . "<br>";
                        echo (new Select())
                                ->setName($field)
                                ->setData($this->data["loginList"])
                                ->setSelected($this->data["row"]['users_id'] ?? "")
                                ->html() . '<br>';

                    } elseif ($field == "performance") {
                        echo $value . "<br>";
                        echo (new Select())
                                ->setName($field)
                                ->setData([
                                    "выполнено" => "не выполнено",
                                    "не выполнено" => "выполнено"
                                ])
                                ->setSelected($this->data["row"]['performance'] ?? "")
                                ->html() . '<br><br>';
                    } else {
                        echo $value . "<br>";
                        echo "<textarea class='form-control form-group' name='$field'>" . ($this->data['row'][$field] ?? "") . "</textarea><br>";
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