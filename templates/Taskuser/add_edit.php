<?php
//print_r($_SESSION);

//print_r($this->data);

use W1020\HTML\Select; ?>

<form action="<?= $this->data['action'] ?>" method="post">
    <?php
    foreach ($this->data["comments"] as $field => $value) {
        if ($field == "performance") {
            echo (new Select())
                    ->setName($field)
                    ->setData([
                        "выполнено" => "выполнено",
                        "не выполнено" => "не выполнено"
                    ])
                    ->setSelected($this->data["row"]['performance'] ?? "")
                    ->html() . '<br>';

        } else {
            echo "<input type='hidden' name='$field' value='" . ($this->data['row'][$field] ?? "") . "'>";

        }
//        if ($field == 'start_date' || $field == 'end_date' and empty($this->data['row'][$field])) {
//            echo $value . "<br>";
//            echo "<input type='hidden' name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";
//        } elseif ($field == 'start_date' || $field == 'end_date' and !empty($this->data['row'][$field])) {
//            echo $value . "<br>";
//            echo "<input name='$field' type='hidden' value='" . ($this->data['row'][$field] ?? "") . "'><br>";
//            type='datetime-local'
//        } elseif ($field == "users_id") {
//            echo "<input name='$field' type='hidden' value='{$this->data['row']['users_id']}'>";

//            echo (new Select())
//                    ->setName($field)
//                    ->setData($this->data["performanceList"])
//                    ->setSelected($this->data["row"]['performance'] ?? "")
//                    ->html() . '<br>';

//        } elseif ($field == "discription") {
//            echo "<input name='$field'  value='{$this->data['row'][$field]}'>";
//        } else {
//            echo $value . "<br>";
//            echo "<input name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";
//            echo (new Select())
//                    ->setName($field)
//                    ->setData($this->data["performanceList"])
//                    ->setSelected($this->data["row"]['performance'] ?? "")
//                    ->html() . '<br><br>';


//        }

    }
    ?>
    <input type="submit" value="ok" class="btn btn-primary">
</form>
