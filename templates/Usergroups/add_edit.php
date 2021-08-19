<?php
//print_r($this->data);

use W1020\HTML\Select;

?>
<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col" id="log">
            <form action="<?= $this->data['action'] ?>" method="post">
                <?php
                foreach ($this->data["comments"] as $field => $value) {
                    echo $value . "<br>";
                    if ($field == "code") {
                        echo (new Select())
                                ->setName($field)
                                ->setData($this->data["codeList"])
                                ->setSelected($this->data["new"]["id"] ?? "")
                                ->html() . '<br>';

                    } else {
                        echo "<input class='form-control form-group' name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";

                    }
                }
                ?>
                <input id="logsub" type="submit" value="ok" class="btn btn-primary">
            </form>

        </div>
        <div class="col">

        </div>
    </div>
</div>
