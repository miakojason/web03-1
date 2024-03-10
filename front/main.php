<style>
  .lists {
    position: relative;
    left: 114px;
    width: 200px;
    height: 240px;
    overflow: hidden;
  }

  .item * {
    box-sizing: border-box;
  }

  .item {
    width: 200px;
    height: 240px;
    margin: auto;
    box-sizing: border-box;
    display: none;
    position: absolute;
  }

  .item div img {
    width: 200px;
    height: 220px;
  }

  .item div {
    text-align: center;
  }

  .left,
  .right {
    width: 0;
    border: 20px solid black;
    border-top-color: transparent;
    border-bottom-color: transparent;
  }

  .left {
    border-left-width: 0;
  }

  .right {
    border-right-width: 0;
  }

  .btns {
    width: 360px;
    height: 100px;
    display: flex;
    overflow: hidden;
  }

  .btn img {
    width: 60px;
    height: 80px;
  }

  .btn {
    font-size: 12px;
    text-align: center;
    flex-shrink: 0;
    width: 90px;
    position: relative;
  }

  .controls {
    width: 420px;
    height: 100px;
    position: relative;
    margin-top: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
</style>
<div class="half" style="vertical-align:top;">
  <h1>預告片介紹</h1>
  <div class="rb tab" style="width:95%;">
    <!--海報區-->
    <div class="lists">
      <!--單一海報區塊-->
      <?php
      $posters = $Poster->all(['sh' => 1], " order by rank");
      foreach ($posters as $idx => $poster) {
      ?>

        <div class="item">
          <!--海報圖片-->
          <div><img src="./img/<?= $poster['img']; ?>" alt=""></div>
          <!--預告片名稱-->
          <div><?= $poster['name']; ?></div>
        </div>
      <?php
      }
      ?>
    </div>
    <!--按鈕區-->
    <div class="controls">
      <!--向左按鈕-->
      <div class="left"></div>
      <!-- 海報按鈕區塊 -->
      <div class="btns">
        <?php
        foreach ($posters as  $idx => $poster) {
        ?>
          <!--單一按鈕-->
          <div class="btn">
            <!--按鈕圖片-->
            <div><img src="./img/<?= $poster['img']; ?>" alt=""></div>
            <!--預告片名-->
            <div><?= $poster['name']; ?></div>
          </div>
        <?php
        }
        ?>
      </div>
      <!--向右按鈕-->
      <div class="right"></div>
    </div>
  </div>
</div>
<div class="half">
  <h1>院線片清單</h1>
  <div class="rb tab" style="width:95%;">
    <div class="movies" style="display:flex;flex-wrap:wrap;font-size: 13px;">
      <?php
      $today = date("Y-m-d");
      $ondate = date("Y-m-d", strtotime("-2 days"));
      $total = $Movie->count(" where `ondate` >= '$ondate' && `ondate` <= '$today' && `sh`=1");
      $div = 4;
      $now = $_GET['p'] ?? 1;
      $pages = ceil($total / $div);
      $start = ($now - 1) * $div;
      $movies = $Movie->all(" where `ondate` >= '$ondate' && `ondate` <= '$today' && `sh`=1 order by rank limit $start,$div");
      foreach ($movies as $movie) {
      ?>
        <div class="movie" style="display:flex;flex-wrap:wrap;width:50%">
          <div>
            <a href="?=intro&id=<?= $movie['id']; ?>">
              <img src="./img/<?= $movie['poster']; ?>" style="width:50px;height:80px">
            </a>
          </div>
          <div>
            <div><?= $movie['name']; ?></div>
            <div>分級:<img src="/icon/03C0<?= $movie['level']; ?>.png"></div>
            <div>上映日期:<?= $movie['ondate']; ?></div>
          </div>
          <div>
            <button onclick="location.href='?do=intro&id=<?= $movie['id']; ?>'">劇情介紹</button>
            <button onclick="location.href='?do=order&id=<?= $movie['id']; ?>'">線上訂票</button>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <div class="ct">
      <?php
      if ($now > 1) {
        $prev = $now - 1;
        echo "<a href='?do=$do&p=$prev'><</a>";
      }
      for ($i = 1; $i <= $pages; $i++) {
        $fontsize = ($now == $i) ? '24px' : '16px';
        echo "<a href='?do=$do&p=$i'>$i</a>";
      }
      if ($now < $pages) {
        $next = $i + 1;
        echo "<a href='?do=$do&p=$i'>></a>";
      }
      ?>
    </div>
  </div>
</div>
</div>