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
    <label>Название новости<input type="text" name="nameNews" value=""></label>
    <label>Краткое опистание<input type="text" name="content" value=""></label>
    <label>Дата<input type="date" name="date" value=""></label>
    <label>черновик<input type="radio" name="published" value="1"></label>
    <label>опубликовано<input type="radio" name="published" value="2"></label>
    <label>Текст новости<textarea name="textNews"></textarea></label>
    <label>Автор<input type="text" name="author"></label>
    <input type="file" name="imegNews" value="">
    <input type="submit">
</form>

</body>
</html>
