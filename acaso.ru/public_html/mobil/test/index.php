<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mocha/1.13.0/mocha.min.css">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="../index.css">
    <title>acaso</title>
  </head>
  <body>
	
    <nav id="menu" class="menu">
      
    </nav>

    <main id="panel" class="panel">
      <header class="panel-header">
        <button class="btn-hamburger js-slideout-toggle"></button>
      </header>

 

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mocha/1.13.0/mocha.min.js"></script>
    <script>
      mocha.setup('bdd');
      var exports = null;
      function assert(expr, msg) {
        if (!expr) throw new Error(msg || 'failed');
      }
    </script>
    <script src="../dist/slideout.js"></script>
    <script src="test.js"></script>
    <script>
      window.onload = function() {
        document.querySelector('.js-slideout-toggle').addEventListener('click', function() {
          slideout.toggle();
        });

        document.querySelector('.menu').addEventListener('click', function(eve) {
          if (eve.target.nodeName === 'A') { slideout.close(); }
        });

        var runner = mocha.run();
      };
    </script>
  </body>
</html>