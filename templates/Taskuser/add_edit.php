<?php
//print_r($_SESSION);

//print_r($this->data);

use W1020\HTML\Select; ?>
<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col" id="log">
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
                }
                ?>
                <input type="submit" value="ok" class="btn btn-primary">
            </form>

        </div>
        <div class="col">

        </div>
    </div>
</div>
