<!DOCTYPE html>
<html lang="<?= config('App')->defaultLocale ?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <?= $this->renderSection('css') ?>
  <title>808BIZ-Jay</title>
</head>
<body>
  <?= $this->include('mauijay\boilerplate\Views\layout\header') ?>
  <?= $this->include('mauijay\boilerplate\Views\layout\mainsidebar') ?>
  <div>
  <?= $this->include('mauijay\boilerplate\Views\layout\contentheader') ?>
  <main>
  <?= $this->renderSection('content') ?>
  </main>
  </div>  
  
  <footer>
    <nav><a href="#" class="navlink">Link 1</a><a href="#" class="navlink">Link 2</a><a href="#" class="navlink">Link 3</a></nav>
    <p>&copy; 2024 808biz. All Rights Reserved</p>
  </footer>
  <script src=""></script>
  <?= $this->renderSection('js') ?>
  <script>
    $.ajaxSetup({ headers: { '<?= config('Security')->headerName ?>': $('meta[name="<?= config('Security')->tokenName ?>"]').attr('content') } })
  </script>
  <div class="modal"></div>
</body>
</html>