<div class="room">
    <div class="seats">
        <?php
        for ($i = 0; $i < 20; $i++) {
        ?>
        <div class="seat">
            <div class="ct"><?=floor(($i/5)+1);?>排<?=(($i%5)+1)?>號</div>
            <div class="ct"><img src="./icon/03D02.png"></div>
            <input type="checkbox" name="chk" value="$i" class="chk">
        </div>
        <?php
        }
        ?>
    </div>
</div>
<div id="info">
    <div>您選擇的電影是:</div>
    <div>您選擇的時刻是:</div>
    <div>您以勾選兩張票，最多可以購買四張票</div>
    <div>
        <button>上一步</button>
        <button>訂購</button>
    </div>
</div>