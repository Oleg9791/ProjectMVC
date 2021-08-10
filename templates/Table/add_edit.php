<?php
//print_r($this->data);
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
                    echo "<input class='form-control form-group' name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";
                }
                ?>
                <input id="logsub" type="submit" value="ok" class="btn btn-primary">
            </form>

        </div>
        <div class="col">

        </div>
    </div>
</div>
