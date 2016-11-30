<?php

class Post {
  public $title;
  public $author;
  public $published;

  public function __construct($title, $author, $published) {

    $this->title = $title;
    $this->author = $author;
    $this->published = $published;
  }
}

$posts = [
  new Post('My First Post', 'JM', true),
  new Post('My Second Post', 'JM', true),
  new Post('My Third Post', 'SD', true),
  new Post('My Fourth Post', 'DV', false)
];

// $unpublishedPosts = array_filter($posts, function ($post) {
//  return ! $post->published;
//});

//$publishedPosts = array_filter($posts, function ($post) {
//  return $post->published;
//});

//foreach ($posts as $post) {
//  $post->published = true;
//}

//$modified = array_map(function ($post) {
//  return ['title' => $post->title];
//}, $posts);

$posts = array_map(function ($post) {
  return (array) $post;
}, $posts);

$authors = array_column($posts, 'author', 'title'); //$title would need to be a public variable

var_dump($authors);

 ?>
