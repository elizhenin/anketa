<div class="container">
    <form method="post">
    <div class="row">
            <label class="control-label">Пол</label>

        <div class="radio form-control">
            <label>
                <input type="radio" name="gender" id="gender1" value="1" checked>
                Мужской
            </label>
        </div>
        <div class="radio form-control">
            <label>
                <input type="radio" name="gender" id="gender2" value="2">
                Женский
            </label>
        </div>
    </div>
<div  class="row">
        <label class="control-label">Возраст</label>

        <div class="radio form-control">
            <label>
                <input type="radio" name="age" id="age1" value="1" checked>
                до 25
            </label>
        </div>
        <div class="radio form-control">
            <label>
                <input type="radio" name="age" id="age2" value="2">
                26-60
            </label>
        </div>
        <div class="radio form-control">
            <label>
                <input type="radio" name="age" id="age3" value="3">
                больше 61
            </label>
        </div>
</div>
        <div class="row">
            <label class="control-label">В какой поликлиннике стоите на учете?</label>

            <div class="form-group">
                <select id="medorg_id" class="form-control" name="medorg_id">
                    <option value="0">(не указано)</option>
                    <?php
                    if(!empty($medorg))
                    foreach($medorg as $key=>$value){
                        ?>
                        <option value="<?=$key?>"><?=$value?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div  class="row">
            <label class="control-label">Насколько легко вам удалось записаться на прием к врачу в регистратуре?</label>

            <div class="radio form-control">
                <label>
                    <input type="radio" name="difficulty" id="difficulty1" value="1" checked>
                    очень легко
                </label>
            </div>
            <div class="radio form-control">
                <label>
                    <input type="radio" name="difficulty" id="difficulty2" value="2">
                   легко
                </label>
            </div>
            <div class="radio form-control">
                <label>
                    <input type="radio" name="difficulty" id="difficulty3" value="3">
                    сложно
                </label>
            </div>
            <div class="radio form-control">
                <label>
                    <input type="radio" name="difficulty" id="difficulty4" value="4">
                    не удалось записаться
                </label>
            </div>
        </div>
        <div  class="row">
            <label class="control-label">Насколько Вас удовлетворяет в целом качество услуг?</label>

            <div class="radio form-control">
                <label>
                    <input type="radio" name="satisfaction" id="satisfaction1" value="1" checked onclick="answer_a_selected();">
                    Полностью удовлетворяет
                </label>
            </div>
            <div class="radio form-control">
                <label>
                    <input type="radio" name="satisfaction" id="satisfaction2" value="2" onclick="answer_b_selected();">
                    В основном удовлетворяет
                </label>
            </div>
            <div class="radio form-control">
                <label>
                    <input type="radio" name="satisfaction" id="satisfaction3" value="3" onclick="answer_c_selected();">
                    Совсем не удовлетворяет
                </label>
            </div>
        </div>

        <div id="answer-c" style="display: none">
            <div  class="row">
                <label class="control-label">Работа каких специалистов Вас не устраивает?</label>

                <div class="checkbox form-control">
                    <label>
                        <input type="checkbox" name="spec1" id="spec1">
                       участковой службы
                    </label>
                </div>
                <div class="checkbox form-control">
                    <label>
                        <input type="checkbox" name="spec2" id="spec2">
                        регистратуры
                    </label>
                </div>
                <div class="checkbox form-control">
                    <label>
                        <input type="checkbox" name="spec3" id="spec3">
                        узких специалистов
                    </label>
                </div>
                <div class="checkbox form-control">
                    <label>
                        <input type="checkbox" name="spec4" id="spec4">
                        функционально-диагностических служб
                    </label>
                </div>

                <label class="control-label">укажите конкретно:</label>
                <input type="text" class="form-control" placeholder="Введите текст" name="spectxt">

            </div>
            <div  class="row">
                <label class="control-label">Что конкретно Вас не устраивает в оказании медицинской услуги?</label>

                <div class="checkbox form-control">
                    <label>
                        <input type="checkbox" name="detail1" id="detail1">
                        результат лечения/обследования
                    </label>
                </div>
                <div class="checkbox form-control">
                    <label>
                        <input type="checkbox" name="detail2" id="detail2">
                        расписание работы специалистов
                    </label>
                </div>
                <div class="checkbox form-control">
                    <label>
                        <input type="checkbox" name="detail3" id="detail3">
                       квалификация специалистов
                    </label>
                </div>
                <div class="checkbox form-control">
                    <label>
                        <input type="checkbox" name="detail4" id="detail4">
                        отношение медицинского персонала
                    </label>
                </div>
                <div class="checkbox form-control">
                    <label>
                        <input type="checkbox" name="detail5" id="detail5">
                        некомпетентность врачей
                    </label>
                </div>
                <label class="control-label">укажите конкретно:</label>
                <input type="text" class="form-control" placeholder="Введите текст" name="detailtxt">

            </div>
        </div>
        <div id="answer-b" style="display: none">
            <div  class="row">
                <label class="control-label">Укажите наиболее значимые для Вас меры, которые Вы можете предложить для улучшения качества медицинских услуг</label>
                <input type="text" class="form-control" placeholder="Введите текст" name="suggestions">
            </div>
        </div>
        <hr/>
        <div class="row text-right">
        <button type="submit" class="btn btn-success">Готово</button>
        </div>
    </form>
</div>
<script type="application/javascript">
    function answer_a_selected(){
        $("#answer-b").hide();
        $("#answer-c").hide();
    }
    function answer_b_selected(){
        $("#answer-b").show();
        $("#answer-c").hide();
    }
    function answer_c_selected(){
        $("#answer-b").show();
        $("#answer-c").show();
    }
</script>