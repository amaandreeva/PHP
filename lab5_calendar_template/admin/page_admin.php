<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>admin_calendar</title>
        <link rel="stylesheet" href="../css/style_admin.css">
    </head>
    <body>
        <form action="handler.php" method="POST">
                <h1>Форма ввода данных</h1>
                
                <label>Дата</label>
                <input type="date" name="date">
                
                <label>Заголовок</label>
                <input type="text" name="header">
               
               <label>Описание</label>
               <textarea name="desc" rows="10" cols="30"></textarea>
               
               <input type="submit">
        </form>
    </body>
</html>