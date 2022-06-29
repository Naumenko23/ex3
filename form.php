<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Задание 3</title>
</head>
<header>
    <h1>Задание 3</h1>
    <h3>Валидация на бекэнде и запись в базу данных.</h3>
</header>
<body>
    <div id="forma">
        <form action="index.php" method="POST">
            <label>
                Имя:<br />
                <input name="name"
                       value=" "
                       type="text"/>
            </label><br />
            <label>
                E-mail:<br />
                <input name="email"
                       value=" "
                       type="email" />
            </label><br />
            <label>
                Год рождения:<br />
                <select name="year_of_birth">
                    <option value="default" hidden>выберите из списка</option>
                    <option>2000</option>
                    <option>1999</option>
                    <option>1998</option>
                    <option>1997</option>
                    <option>1996</option>
                    <option>1995</option>
                    <option>1994</option>
                    <option>1993</option>
                    <option>1992</option>
                    <option>1991</option>
                </select>
            </label><br />
            
            Пол:<br />
            <label>
                <input type="radio"
                       name="gender" value="male" />
                мужской
            </label>
            <label>
                <input type="radio" 
                       name="gender" value="female" />
                женский
            </label><br />
            Количество конечностей:<br />
            <label>
                <input type="radio"
                       name="number_of_limbs" value="2" />
                2   
            </label>
            <label>
                <input type="radio" 
                       name="number_of_limbs" value="4" />
                4   
            </label><br />
            <label>
                <input type="radio"
                       name="number_of_limbs" value="other" />
                другое
            </label><br />
            <label>
                Сверхспособности:
                <br />
                <select name="superpowers-3[]"
                        multiple="multiple">
                    <option value="immortality">бессмертие</option>
                    <option value="passing_through_walls">прохождение сквозь стены</option>
                    <option value="levitation">левитация</option>
                </select>
            </label><br />
            <label>
                Биография:<br />
                <textarea name="biography"> </textarea>
            </label><br />
            С контрактом ознакомлен(а)
            <br />
            <label>
                <input type="checkbox" 
                       name="policy" />
                да
            </label><br />
            <input type="submit" value="Отправить" />
            
        </form>
    </div>
    <div>
        <footer>
            <h6>(c) Науменко Даниил </h6>
        </footer>
    </div>
</body>
</html>
