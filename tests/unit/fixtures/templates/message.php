<?php
/**
 * @var $faker \Faker\Generator
 * @var $index integer
 */
<<<<<<< HEAD
$text = $faker->realText();
return [
    'text_origin' => $text,
    'text' => $text,
=======
return [
    'text' => $faker->realText(),
>>>>>>> 02a42c729074da5ee166a368a8ee994564b4ed17
    'is_new' => 0,
    'timestamp' => $faker->dateTimeBetween('-1year','now')->getTimestamp()
];
