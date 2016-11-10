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
                {type: 'main', size: '100%', minSize: '100'},
            ]
        },


        poliklinnika_ready: {
            name: 'poliklinnika_ready',
            url: '/ajax/statpoliklinnikareadylist',
            limit: 50,
            method: 'GET', // need this to avoid 412 error on Safari
            header: 'Список анкет поликлинники',
            show: {
                selectColumn: true,
                toolbarDelete: true,
                header: true,
                footer: true,
                toolbar: true,
                toolbarReload: false,   // indicates if toolbar reload button is visible
                toolbarColumns: false,   // indicates if toolbar columns button is visible
                toolbarSearch: false   // indicates if toolbar search controls are visible
            },
            multiSelect: true,

            toolbar: {
                items: [
                    {type: 'break', id: 'break_first'},
                    {type: 'button', id: 'csv', caption: 'Выгрузить CSV', img: 'icon-folder'},
                    {type: 'spacer'},
                    {type: 'button', id: 'submit', caption: 'Утвердить', img: 'icon-page'}
                ],
                onClick: function (target, data) {
                    if (target == 'csv') {
                        var csv = 'ФИО;Дата рождения;СНИЛС;№ ИПР/ПРП;Тип мероприятия;Подтип мероприятия;Мероприятие;Дата исполнения;Результат;Мед.организация;' + "\n";
                        for (i = 1; i <= w2ui.ipra_ready.records.length; i++) {
                            csv = csv + w2ui.ipra_ready.records[i - 1].fio + ';';
                            csv = csv + w2ui.ipra_ready.records[i - 1].bdate + ';';
                            csv = csv + w2ui.ipra_ready.records[i - 1].snils.trim() + ';';
                            csv = csv + w2ui.ipra_ready.records[i - 1].prgnum.trim() + ';';
                            csv = csv + w2ui.ipra_ready.records[i - 1].type.trim() + ';';
                            csv = csv + w2ui.ipra_ready.records[i - 1].event.trim() + ';';
                            csv = csv + w2ui.ipra_ready.records[i - 1].name.trim() + ';';
                            csv = csv + w2ui.ipra_ready.records[i - 1].date + ';';
                            csv = csv + w2ui.ipra_ready.records[i - 1].result.trim() + ';';
                            csv = csv + w2ui.ipra_ready.records[i - 1].med_org.trim() + ';';
                            csv = csv + "\n";
                        }
                        csv = $('<div/>').html(csv).text();
                        saveTextAs('\ufeff' + csv, "Поликлинники.csv");
                    }
                }
            },
            columns: [
                {field: 'date', caption: 'Дата', size: '16%', sortable: false},
                {field: 'bdate', caption: 'Дата рождения', size: '16%', sortable: false},
                {field: 'snils', caption: 'СНИЛС', size: '16%', sortable: false},
                {field: 'prgnum', caption: 'Номер ИПР/ПРП', size: '16%', sortable: false},
                {field: 'type', caption: 'Тип', size: '16%', sortable: false},
                {field: 'event', caption: 'Под.тип', size: '16%', sortable: false},
                {field: 'name', caption: 'Мероприятие', size: '16%', sortable: false},
                {field: 'date', caption: 'Дата исполнения', size: '16%', sortable: false},
                {field: 'result', caption: 'Результат', size: '16%', sortable: false},
                {field: 'med_org', caption: 'Мед.орг.', size: '26%', sortable: false}
            ],
        onLoad: function(event) {
            event.onComplete = function(){
                console.log(this.med_org_id);
            };
            }
        }
    };
    $('#main').w2layout(config.layout);
    w2ui.layout.content('top', $().w2toolbar(toolbar_cfg));
    w2ui.layout.content('main', $().w2grid(config.ipra_ready));


</script>