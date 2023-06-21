<section style="height:calc(100vh - 0px);">
  <div id="main_content">
    <div id="latest">
      <h4>자유게시판</h4>
      <ul>
        <!-- 최근 게시 글 DB에서 불러오기 -->
        <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . "/php_source/khs/common/db_connect.php";
        $sql = "select * from board order by num desc limit 5";
        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->execute();
        $rowArray = $stmt->fetchAll();


        if (!$result)
          echo "게시판 DB 테이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
        foreach ($rowArray as $row) {
          $sub = substr($row["subject"], 0, 10);
          $name = substr($row["name"], 0, 10);
          $regist_day = substr($row["regist_day"], 0, 10);
          $name = mb_substr($name, 0, 1) . " * " . mb_substr($name, 2, 1);

          print "<li>
            <span> $sub </span>
            <span> $name </span>
            <span> $regist_day </span>
          </li>";
        }
        ?>

        <?php
        ?>
    </div>
    <div id="point_rank">
      <h4>활동 랭킹</h4>
      <ul>
        <!-- 포인트 랭킹 표시하기 -->
        <?php
        $rank = 1;
        $sql2 = "select * from members order by point desc limit 5";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->setFetchMode(PDO::FETCH_ASSOC);
        $result2 = $stmt2->execute();
        $rowArray2 = $stmt2->fetchAll();
        if (!$result2)
          echo "회원 DB 테이블(members)이 생성 전이거나 아직 가입된 회원이 없습니다!";
        foreach ($rowArray2 as $row) {

          $name  = $row["name"];
          $id    = $row["id"];
          $point = $row["point"];
          $name = mb_substr($name, 0, 1) . " * " . mb_substr($name, 2, 1);
          print "
            <li>
              <span> $rank </span>
              <span> $name </span>
              <span> $id </span>
              <span> $point </span>
            </li>";
        }
        ?>

        <?php
        $rank++;
        ?>
      </ul>
    </div>
  </div>
  <div>
    <iframe allowscriptaccess="always" allowfullscreen="" src="https://www.youtube.com/embed/r2OLC_gOLvI" width="44%" height="720" frameborder="0" id="you"></iframe>
  </div>
</section>