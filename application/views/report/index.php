<div class="container">
        <div class="row">
            <div class="col-sm-3 text-right" style="height:130px;">
            </div>
            <div class="col-sm-6 text-left" style="height:130px;">
<h2>Выберите диапазон</h2>
            </div>
            <div class="col-sm-3 text-right" style="height:130px;">
            </div>
        </div>
</div>
<div class="container">
    <form>
    <div class="row">
    <div class="col-sm-3 text-right" style="height:130px;">
        <div class="form-group">
            <input type='text' class="form-control" id='from' name='from' placeholder="С какого числа"/>
        </div>
    </div>
        <div class="col-sm-3 text-right" style="height:130px;">
            <div class="form-group">
                <input type='text' class="form-control" id='to' name='to' placeholder="По какое число"/>
            </div>
        </div>
        <div class="col-sm-6 text-left" style="height:130px;">
           <button type="submit" class="btn btn-default">Сформировать</button>
        </div>
    </div>

    </form>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-3 text-right" style="height:130px;">
        </div>
        <div class="col-sm-6 text-left" style="height:130px;">
            <h2>или конкретный месяц</h2>
        </div>
        <div class="col-sm-3 text-right" style="height:130px;">
        </div>
    </div>
<div class="container">
    <form>
        <div class="row">
            <div class="col-sm-3 text-right" style="height:130px;">
                <div class="form-group">
                    <input type='text' class="form-control" id='month' name='month' placeholder="за месяц"/>
                </div>
            </div>
            <div class="col-sm-6 text-left" style="height:130px;">
                <button type="submit" class="btn btn-default">Сформировать</button>
            </div>
        </div>

    </form>
</div>

<?php
if(!empty($download))
{
    ?>
    <a href="/reports/<?=$download?>"><button class="btn btn-default">Скачать отчет</button></a>
<?php
}
?>

<script type="text/javascript">
    $(function () {
        $('#from').datetimepicker({
            viewMode: 'years',
            format: 'YYYY-MM-DD',
            locale: 'ru'
        });
        $('#to').datetimepicker({
            viewMode: 'years',
            format: 'YYYY-MM-DD',
            locale: 'ru'
        });
        $('#month').datetimepicker({
            viewMode: 'years',
            format: 'YYYY-MM',
            locale: 'ru'
        });
    });
</script>