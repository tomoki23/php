<?php
$fp = fopen("info.txt", "r");
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>サークルサイト</title>
</head>

<body>
    <?php include('navbar.php'); ?>

    <main role="main" class="container" style="padding:60px 15px 0">
        <div>
            <h1>お知らせ</h1>
            <?php
            if ($fp) {
                $title = fgets($fp);
                if ($title) {
                    echo '<p><a href="info.php">' . $title . '</a></p>';
                } else {
                    echo '<p>お知らせはありません。</p>';
                }
                fclose($fp);
            } else {
                echo '<p>お知らせはありません。</p>';
            }
            ?>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
