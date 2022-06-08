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

$my_dates = array_keys($posts);
$my_dates_post = array_values($posts);
// var_dump($my_dates_post);

for ($i = 0; $i < count($my_dates_post); $i++) {
    $current_posts_array = $my_dates_post[$i];
    var_dump($current_posts_array);
    for ($j = 0; $j < count($current_posts_array); $j++) {
        var_dump($current_posts_array['title']);
    }
};

die();

// var_dump($my_dates);
// for ($i = 0; $i < count($my_dates); $i++) {
//     $current_date = $my_dates[$i];
//     echo "<h2>Post del " . $current_date . ":</h2>";
//     for ($y = 0; $y < count($my_dates_post); $y++) {
//         var_dump($current_date_post);
//     };
// };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php for ($i = 0; $i < count($my_dates); $i++) {
        $current_date = $my_dates[$i];   
    ?>
    <ul>
        <h2>Post del <?php echo $current_date ?>:</h2>
        <?php 
            for ($y = 0; $y < count($current_posts_array); $y++) {
                echo $current_posts_array["title"];
            }
        ?>
        <?php } ?>
    </ul>
    
</body>
</html>