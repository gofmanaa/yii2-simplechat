<?php
/**
 * @var $faker \Faker\Generator
 * @var $index integer
 */
$text = $faker->realText();
return [

    'text' => $text,
    'text_origin' => $text,
    'is_new' => 0,
    'timestamp' => $faker->dateTimeBetween('-1year','now')->getTimestamp()
];
