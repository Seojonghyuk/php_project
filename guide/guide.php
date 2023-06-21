<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>가이드</title>
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/css/common.css' ?>">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/message/css/message.css' ?>">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/css/header.css' ?>">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/css/slide.css?v=<?= date('Ymdhis') ?>">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/guide/guide.css?er=1' ?>">
  <script src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/message/js/message.js' ?>"></script>
  <script src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/js/slide.js' ?>"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/khs/common/header.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/khs/common/slide.php"; ?>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/php_source/khs/common/db_connect.php"; ?>
  </header>
  <section>
    <div id="contact">
      <div id="contact_box">
        <img src="./img/캡처.PNG" id="v3">

        <div>
          <h4>무료입양이란?</h4>
          <span>각자의 사정으로인해 새로운 환경을
            찾아야 할 경우 입소되게되며 해당 아이들은
            무료분양게시판에서 확인 하실 수 있습니다.
          </span>
        </div>

        <div>
          <h4>입양아이확인</h4>
          <span>무료분양게시판을 통해 아이의 프로필을 확인합니다.</span>
        </div>
        <div>
          <h4>직접 방문</h4>
          <span>컴투펫케어에 방문하여 아이들을 직접 확인해주세요.</span><br>
        </div>
        <div>
          <h4>계약서 및 동의서</h4>
          <span>입양에 관한 계약 및 동의서를 작성합니다.
            해당내용은 재유기를 방지하는 각서이며
            법적인 책임을 물을 수 있는 문서입니다.
            허위사실없이 기재가 이루어집니다.</span>
        </div>
        <div>
          <h4>사이트 후기작성</h4>
          <span>입양에 관한 계약 및 동의서를 작성합니다.
            모두가 안심할 수 있도록 아이가
            생활하는 전반적인사진을
            후기게시판에 써주세요.</span>
        </div>

      </div>
  </section>
  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/khs/common/footer.php"; ?>
  </footer>
</body>

</html>