<?php
//print_r($_SESSION);

//print_r($this->data);

use W1020\HTML\Select; ?>

<form action="<?= $this->data['action'] ?>" method="post">
    <?php
    foreach ($this->data["comments"] as $field => $value) {
        echo $value . "<br>";
        if ($field == 'start_date' || $field == 'end_date' and empty($this->data['row'][$field])) {
            echo "<input type='datetime-local' name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";

        } elseif ($field == 'start_date' || $field == 'end_date' and !empty($this->data['row'][$field])) {
            echo "<input name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";

        } elseif ($field == "users_id") {
            echo (new Select())
                    ->setName($field)
                    ->setData($this->data["loginList"])
                    ->setSelected($this->data["row"]['users_id'] ?? "")
                    ->html() . '<br>';

        } elseif ($field == "performance") {
            echo
                (new Select())
                    ->setName($field)
                    ->setData([
                        "выполнено" => "выполнено",
                        "не выполнено" => "не выполнено"
                    ])
                    ->setSelected($this->data["row"]['performance'] ?? "")
                    ->html() . '<br>';
        } else {
            echo "<input name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";
        }
    }
    ?>
    <input type="submit" value="ok" class="btn btn-primary">
</form>
