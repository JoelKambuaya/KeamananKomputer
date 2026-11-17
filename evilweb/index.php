<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Attacker Landing Page (DEMO)</title>
<style>
  :root{
    --bg:#0d1117; --card:#161b22; --text:#e6edf3; --muted:#8b949e;
    --danger:#f85149; --accent:#3fb950; --border:#30363d;
  }
  @media (prefers-color-scheme: light){
    :root{ --bg:#f6f8fa; --card:#ffffff; --text:#1f2328; --muted:#57606a; --border:#d0d7de; }
  }
  *{box-sizing:border-box}
  html,body{height:100%;margin:0}
  body{
    background:var(--bg); color:var(--text);
    font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;
    display:flex; align-items:center; justify-content:center; padding:24px;
    padding-top:calc(24px + env(safe-area-inset-top,0px));
    padding-bottom:calc(24px + env(safe-area-inset-bottom,0px));
  }
  .ribbon{
    position:fixed; top:0; left:0; right:0;
    background:var(--danger); color:#fff; text-align:center;
    font-weight:700; font-size:13px; letter-spacing:.5px;
    padding:8px 12px; padding-top:calc(8px + env(safe-area-inset-top,0px));
    z-index:10;
  }
  .card{
    max-width:480px; width:100%; background:var(--card);
    border:1px solid var(--border); border-radius:12px;
    padding:32px 28px; margin-top:40px;
  }
  .icon{font-size:40px; margin-bottom:8px;}
  h1{font-size:20px; margin:0 0 8px;}
  p{color:var(--muted); line-height:1.6; font-size:14px;}
  .box{
    background:rgba(248,81,73,.08); border:1px solid var(--danger);
    border-radius:8px; padding:12px 14px; margin:16px 0; font-size:13px;
  }
  .kv{display:flex; justify-content:space-between; font-size:13px; padding:6px 0; border-bottom:1px dashed var(--border);}
  .kv:last-child{border-bottom:none}
  .kv span:first-child{color:var(--muted)}
  code{word-break:break-all; font-size:12px}
  footer{margin-top:18px; font-size:12px; color:var(--muted); text-align:center}
</style>
</head>
<body>
  <div class="ribbon">⚠ HALAMAN DEMO — BUKAN SITUS NYATA — HANYA UNTUK EDUKASI OPEN REDIRECT</div>
  <div class="card">
    <div class="icon">🪝</div>
    <h1>Anda baru saja dialihkan ke situs attacker</h1>
    <p>
      Jika ini bukan simulasi, pada tahap ini penyerang biasanya akan menampilkan
      halaman login palsu (clone) untuk mencuri kredensial Anda, atau langsung
      memasang malware. Karena redirect-nya <strong>open</strong> (tidak divalidasi),
      browser Anda mempercayai tautan ini karena awalnya berasal dari domain yang sah.
    </p>

    <div class="box" id="info">
      <div class="kv"><span>Referrer</span><span id="ref">-</span></div>
      <div class="kv"><span>Parameter redirect</span><span id="param">-</span></div>
      <div class="kv"><span>Full URL saat ini</span><span><code id="full">-</code></span></div>
    </div>

    <p>
      Mitigasi: validasi parameter redirect dengan <em>allow-list</em> domain/path,
      gunakan token/identifier internal (bukan URL mentah), atau tampilkan halaman
      konfirmasi "Anda akan meninggalkan situs ini" sebelum redirect dieksekusi.
    </p>

    <footer>Dibuat untuk demonstrasi keamanan (PoC) — tidak mengumpulkan atau mengirim data apa pun.</footer>
  </div>

  <script>
    try{
      document.getElementById('ref').textContent = document.referrer || '(kosong)';
      document.getElementById('full').textContent = window.location.href;
      const params = new URLSearchParams(window.location.search);
      let found = '(tidak ada query string)';
      for (const [k,v] of params.entries()){
        found = k + ' = ' + v;
        break;
      }
      document.getElementById('param').textContent = found;
    }catch(e){
      console.error(e);
    }
  </script>
</body>
</html>
