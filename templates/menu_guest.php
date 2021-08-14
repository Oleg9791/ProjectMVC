<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <form action="#" class="searchform order-lg-last">
            <div class="form-group d-flex">
<!--                <input type="text" class="form-control pl-3" placeholder="Search">-->
<!--                <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>-->
            </div>
        </form>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="?" class="nav-link<?= $this->data['controllerName'] == "Main" ? " active" : "" ?> pl-0">Home</a></li>
                <li class="nav-item"><a href="?type=Aut&action=show" class="nav-link<?= $this->data['controllerName'] == "Aut" ? " active" : "" ?>">Войти</a></li>
                <li class="nav-item"><a href="?type=Taskguest&action=show" class="nav-link<?= $this->data['controllerName'] == "Tasks" ? " active" : "" ?>"">Показать таблицу Taskguest</a></li>
                <li class="nav-item"><a href="?type=Aut&action=showreg" class="nav-link<?= $this->data['controllerName'] == "Aut" ? " active" : "" ?>">Регистрация</a></li>
<!--                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>-->
            </ul>
        </div>
    </div>
</nav>

