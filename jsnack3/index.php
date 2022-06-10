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

for($i = 0; $i < count($my_dates); $i++) {
    $current_date = $my_dates[$i];
    echo "<h2>" . $current_date . "</h2>";
    $current_posts_array = $posts["$current_date"];
    for($j = 0; $j < count($current_posts_array); $j++) {
        $current_post = $current_posts_array[$j];
        echo "<h3>" . $current_post['title'] . "</h3>";
        echo "<p>" . $current_post['author'] . "</p>";
        echo "<p>" . $current_post['text'] . "</p>";
    }
}
?>
