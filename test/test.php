<?php
      //DBへのアクセス
$dsn = 'mysql:host=localhost;dbname=takarabako;charset=utf8';
$user = 'treasure';
$password = 'box';

      $pdo = new PDO($dsn, $user, $password);
      $sql = "SELECT * FROM hobbys";
      $stmt = $pdo->query($sql);
      $stmt->execute();
      $all = $stmt->fetchall();

foreach($all as $all){
      $result = str_replace("http://","https://",$all['URL'],$n);
  ?>
  <!--web表示-->
  <!doctype html>
  <html lang="ja">
    <head>
    </head>   
      <body>
  <!--webサイトの表示する大きさ-->
  <iframe id="frame"
          width="400px"
          height="400px"
          src="">
          お使いのブラウザはiframeに対応しておりません
        </iframe>
        <!--webサイトの表示する大きさ-->
      </body>
  </html>

  <!--URL代入-->
  <script>
    var test,url;
    url= '<?php echo $result; ?>';
    frame.setAttribute('src', url);
    document.write(url);
  </script>
  <?php
}
?>