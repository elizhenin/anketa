<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>

    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $title ?></title>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/moment-with-locales.js"></script>
    <script src="/js/bootstrap-datetimepicker.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/snippets.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-datetimepicker.min.css"/>

</head>
<body style="padding: 0px; margin:0px">

<div class="clearfix">
    <div class="col-md-12 text-center">
        <h3>Анкеты:</h3>
       <?=$menu?>
        <hr/>
    </div>
</div>
<div class="clearfix">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <?=$page?>
    </div>

    <div class="col-md-2"></div>
</div>

</body>
</html>
