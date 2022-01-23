
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>
<body>
<form method="post" action="addNews2.php" enctype="multipart/form-data">
    <label>Название новости<input type="text" name="nameNews" value=""></label><br/>
    <label>Краткое опистание<input type="text" name="content" value=""></label><br/>
    <label>Дата<input type="date" name="date" value=""></label><br/>
    <label>черновик<input type="radio" name="published" value="1"></label><br/>
    <label>опубликовано<input type="radio" name="published" value="2"></label><br/>
    <label>Текст новости<textarea name="textNews"></textarea></label><br/>
    <label>Автор<input type="text" name="author"></label><br/>
    <input type="file" name="avatar" value=""><br/>
    <input type="submit">
</form>

</body>
</html>
