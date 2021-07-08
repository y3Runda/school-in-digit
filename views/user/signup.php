<?php
    $title = "Реєстрація";
    include ROOT . '/views/_layouts/header.php';
?>

<section class="title_section container">
    <div id="everything__title_section">
        <p id="heading">Реєстрація до системи</p>
    </div>
</section>

<section class="choice_section container">
    <div id="everything__choice_section">
        <div id="heading">
            Зареєструватись як
        </div>
        <div id="links">
            <a href="signup/pupil">
                Учень
            </a>
            <a href="signup/teacher">
                Вчитель
            </a>
            <a href="signup/parent">
                Батько / Мати
            </a>
        </div>
    </div>
</section>

<?php include ROOT . '/views/_layouts/footer.php'; ?>