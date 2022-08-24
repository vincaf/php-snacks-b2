<!-- Creare un array di array.  -->
<!-- Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007  -->
<!-- e come valore un array di post associati a quella data.  -->
<!-- Stampare ogni data con i relativi post. -->

<!-- Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array of Array</title>
</head>
<body>
    <?php
        $posts = [
        
            '10/01/2019' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ],
        ];
    ?>
    
    <h1>BLOG</h1>

    <div>
        <?php foreach ($posts as $date => $dailyPosts) { ?>
            <h5> <?php echo $date ?> </h5>
                <?php foreach ($dailyPosts as $post) { ?>
                    <h4><?php echo $post['title'] ?> </h4>
                    <h6> <?php echo $post['author'] ?> </h6>
                    <p> <?php echo $post['text'] ?> </p>
                <?php } ?>
        <?php } ?>
    </div>
</body>
</html>