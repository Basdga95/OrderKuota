<script src="/eruda.min.js"></script>
<script>
    eruda.init({
        tool: ['console', 'elements', 'network', 'resources', 'info']
    });
    eruda.get().config.set('displaySize', 60);
    eruda.remove('settings');
    eruda.util.evalCss.setTheme('Light');
</script>
<!-- index.php -->
<?php /* hanya HTML/CSS/JS, dapat dipakai di server PHP juga */ ?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="theme-color" content="#00897b" />

  <title>Login Web Order Kuota</title>

  <!-- Font (Google) & Icon (Font Awesome free) -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/1b9d3c9e8a.js" crossorigin="anonymous"></script>

  <style>
    :root{
      --teal:#08807b;
      --card:#fff;
      --accent:#08807b; /* hijau tombol */
      --muted:#08807b;
    }
    *{box-sizing:border-box;font-family: 'Roboto', sans-serif}
    body{
      margin:0;
      background: var(--teal);
      min-height:100vh;
      display:flex;
      align-items:flex-start;
      justify-content:center;
      padding:40px 12px;
      color:#333;
    }
    .container{
      width:100%;
      max-width:720px;
    }

    h1.title{
      text-align:center;
      color:#fff;
      font-size:25px;
      margin:10px 0 22px;
      font-weight:300;
    }

    .card{
      background: var(--card);
      border-radius:6px;
      padding:28px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.18);
    }

    .card .brand{
      text-align:center;
      font-weight:700;
      color:#666;
      margin-bottom:18px;
      font-size:18px;
    }

    .field{
      position:relative;
      margin:18px 0 6px;
    }

    .field .icon{
      position:absolute;
      left:12px;
      top:50%;
      transform:translateY(-50%);
      color: #6b6b6b;
      font-size:18px;
    }

    .field input{
      width:100%;
      padding:12px 14px 10px 44px; /* space for icon on left */
      border:0;
      border-bottom:2px solid #e3e3e3;
      outline:none;
      font-size:16px;
      transition: border-color .18s ease;
      background:transparent;
    }

    .field input:focus{
      border-bottom-color: var(--muted);
    }

    .row {
      display:flex;
      align-items:center;
      justify-content:space-between;
      margin-top:10px;
    }

    .remember {
      display:flex;
      align-items:center;
      gap:8px;
      color:#555;
      font-size:15px;
    }

    .remember input[type="checkbox"]{
      width:18px;
      height:18px;
      accent-color: #555;
    }

    .forgot {
      color:#0aa7c0;
      text-decoration:none;
      font-size:15px;
    }

    .btn{
      display:block;
      width:100%;
      padding:10px 18px;
      margin-top:20px;
      border-radius:2px;
      border:0;
      font-size:15px;
      cursor:pointer;
      box-shadow: 0 6px 12px rgba(0,0,0,0.08);
    }

    .btn.login{
      background: var(--accent);
      color:#fff;
    }

    .btn.secondary{
      background:#fff;
      color:#0aa7c0;
      border:2px solid #eee;
      margin-top:14px;
    }

    .btn.secondary:active{transform:translateY(1px);}

    /* responsive */
    @media (max-width:420px){
      h1.title{font-size:36px}
      .card{padding:20px}
    }
.field .icon-img {
  position:absolute;
  left:12px;
  top:50%;
  transform:translateY(-50%);
  width:20px;   /* sesuaikan ukuran */
  height:20px;
  opacity:0.7;
}

  </style>
</head>
<body>
  <div class="container">
    <h1 class="title">Login Web Report</h1>

    <div class="card" role="main" aria-label="form login">
      <div class="brand">Order Kuota</div>

      <!-- Form -->
      <form action="order.php" method="post" autocomplete="off">
         <div class="field">
  <img src="usr.png" class="icon-img" alt="email">
  <input type="text" name="use" placeholder="Nama Pengguna" required>
</div>

<div class="field">
  <img src="GBK.png" class="icon-img" alt="password">
  <input type="password" name="word" placeholder="Kata Sandi" required>
</div>


        <div class="row" style="margin-top:8px;">
          <label class="remember"</label>
          <a class="forgot" href="#"></a>
        </div>

        <button class="btn login" type="submit">Masuk</button>


      </form>
    </div>

  </div>
</body>
</html>
