<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #3fceb4;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link<?= $this->data['controllerName'] == "Main" ? " active" : "" ?>" href="?">Home <span
                            class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "Users" ? " active" : "" ?>"
                   href="?type=Users&action=show">Показать таблицу Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "Tasks" ? " active" : "" ?>"
                   href="?type=Tasks&action=show">Показать таблицу Tasks</a>
            </li>

            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "UserGroups" ? " active" : "" ?>"
                   href="?type=UserGroups&action=show">Показать таблицу UserGroups</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="?type=Aut&action=logout">Выйти(<?= isset($_SESSION['user']['code']) ? $_SESSION['user']['name'] : "" ?>
                    )</a>
            </li>
        </ul>
    </div>
</nav>

