<div style="width: 100%; height: 100vh;">
    <div id="main" style="width: 100%; height: 100%;"></div>
</div>
<?= $toolbar_cfg ?>
<script type="text/javascript">

    var config = {
        layout: {
            name: 'layout',
            padding: 0,
            margin: 10,
            panels: [
                {type: 'top', size: '34', resizable: false},
                {type: 'main', size: '100%', minSize: '100'}
            ]
        }
    };


</script>

<div id="main-body" style="display: none">
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


</div>
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
</div>

<script>
    $(function() {
        $('#main').w2layout(config.layout);
        w2ui.layout.content('top', $().w2toolbar(toolbar_cfg));
        w2ui.layout.content('main', $("#main-body").html());
        $("#main-body").remove();

    });
</script>