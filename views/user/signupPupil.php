<?php
    $title = "Реєстрація учня";
    include ROOT . '/views/_layouts/header.php';
?>

<?php include_once ROOT . '/views/_layouts/titleSection.php';?>

<?php if ( isset($errors) && is_array($errors) ): ?>
<section class="errors_section container">
    <div id="everything__errors_section">
        <ul>
            <?php foreach( $errors as $error ): ?>
                <li> - <?=$error?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php endif; ?>

<section class="signup_section container">
    <div id="everything__signup_section">
        <form action="/user/signup/pupil" method="POST">
            <p style="margin-top: 0; text-align: center;">
                Вже зареєструвались? <a href="/user/login">Вхід</a>
            </p>
            <p>
                Коди школи та класу мають бути видані вашим класним керівником.
            </p>
            <p id="codes">
                <input type="text" name="c_school" value="<?=$_POST['c_school']?>" placeholder="Код школи" required>
                <input type="text" name="c_class" value="<?=$_POST['c_class']?>" placeholder="Код класу" style="margin-right: 0;" required>
            </p>
            <p>
                <input type="email" name="email" value="<?=$_POST['email']?>" placeholder="E-Mail" required>
            </p>
            <p>
                <input type="text" name="surname" value="<?=$_POST['surname']?>" placeholder="Прізвище" required>
            </p>
            <p>
                <input type="text" name="name" value="<?=$_POST['name']?>" placeholder="Ім'я" required>
            </p>
            <p>
                <input type="text" name="patronymic" value="<?=$_POST['patronymic']?>" placeholder="По-батькові" required>
            </p>
            <p>
                <select name="gender" value="">
                    <?php if($_POST['gender'] == 'male'): ?>
                    <option disabled="">Виберіть вашу стать</option>
                    <option value="male" selected>Чоловіча</option>
                    <option value="female">Жіноча</option>
                    <?php elseif($_POST['gender'] == 'female'): ?>
                    <option disabled="">Виберіть вашу стать</option>
                    <option value="male">Чоловіча</option>
                    <option value="female" selected>Жіноча</option>
                    <?php else: ?>
                    <option disabled="" selected="">Виберіть вашу стать</option>
                    <option value="male">Чоловіча</option>
                    <option value="female">Жіноча</option>
                    <?php endif; ?>
                </select>
            </p>
            <p>
                Дата народження:
            </p>
            <p style="margin-top: 4px;">
                <input type="date" name="birthdate"  value="<?=$_POST['birthdate']?>" required>
            </p>
            <p style="margin-top: 25px;">
                За допомогою <strong>логіну</strong> та <strong>паролю</strong> ви повинні входити в систему, тому наступні дані ви повинні обов'язково <strong>запам'ятати</strong>!
            </p>
            <p style="margin-top: 25px;">
                Логін має містити не менше 8 символів.
            </p>
            <p>
                <input type="text" name="login" placeholder="Логін" required>
            </p>
            <p style="margin-top: 25px;">
                Пароль має містити не менше 8 символів.
            </p>
            <p>
                <input type="password" name="password1" placeholder="Пароль" required>
            </p>
            <p>
                <input type="password" name="password2" placeholder="Повторіть пароль" required>
            </p>
            <p class="accept">
                <input type="checkbox" name="accepted" required>
                Я згодний(-на) з <a href="#">Правилами конфіденційності</a> та <a href="#">Правилами системи</a>.
            </p>
            <p style="text-align: center;">
                <button class="btn" type="submit" name="do_signup" style="margin-top: 20px;">Зареєструватись</button>
            </p>
        </form>
    </div>
</section>

<?php include ROOT . '/views/_layouts/footer.php'; ?>