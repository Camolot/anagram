<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Anagram.php";

  $app = new Silex\Application();

  $app->register (new Silex\Provider|TwigServiceProvider(), array(
    'twig.path'==>__DIRD__.'/../views'
  ));

  $app->get("/", function() use ($app) {
    return $app['twig']-render(anagram_form.html.twig)
  });


return $app;
 ?>
