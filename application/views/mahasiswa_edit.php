<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Mahasiswa — Rudy 2310010148</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg1:#0f1216;--bg2:#141922;--card:rgba(255,255,255,.06);
      --stroke:rgba(255,255,255,.12);--text:#e9eef6;--muted:#a7b1c2;
      --accent:#39c0ff;--accent-2:#7cffd9;--radius:20px;--shadow:0 10px 30px rgba(0,0,0,.45)
    }
    *{box-sizing:border-box} html,body{height:100%}
    body{
      margin:0;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,Arial;
      color:var(--text);
      background:radial-gradient(80vw 80vh at 20% 10%, #0b0f14 0%, var(--bg1) 40%, var(--bg2) 100%);
      display:grid;place-items:center;padding:24px
    }
    .shell{width:min(720px,92vw)}
    .title{display:flex;align-items:center;gap:12px;margin:0 0 18px}
    .badge{padding:6px 10px;font-size:.75rem;border:1px solid var(--stroke);border-radius:10px;color:var(--muted)}
    .card{background:var(--card);border:1px solid var(--stroke);border-radius:var(--radius);
      box-shadow:var(--shadow);backdrop-filter:blur(10px);padding:26px}
    label{font-size:.9rem;color:var(--muted);margin-bottom:8px;display:block}
    .field{
      background:#0f131a;border:1px solid #222a36;border-radius:14px;
      padding:14px 16px;color:var(--text);width:100%;outline:none;
      transition:border-color .2s,box-shadow .2s,transform .05s
    }
    .field:focus{border-color:#39c0ff44;box-shadow:0 0 0 6px rgba(57,192,255,.12)}
    .row{display:grid;grid-template-columns:1fr;gap:16px}
    @media(min-width:560px){.row{grid-template-columns:1fr 1fr}}
    .actions{display:flex;gap:12px;margin-top:8px}
    .btn{
      appearance:none;border:none;cursor:pointer;border-radius:14px;
      padding:12px 16px;font-weight:600;letter-spacing:.2px;text-decoration:none;display:inline-block
    }
    .btn-primary{
      background:linear-gradient(135deg,var(--accent),var(--accent-2));
      color:#081017;flex:1;box-shadow:0 10px 20px rgba(60,200,255,.18)
    }
    .btn-primary:hover{box-shadow:0 14px 24px rgba(60,200,255,.26)}
    .btn-ghost{
      background:transparent;color:var(--muted);
      border:1px solid var(--stroke);flex:1;text-align:center
    }
    .btn-ghost:hover{border-color:#2a3342;color:#c8d2e2}
  </style>
</head>

<body>
  <div class="shell">
    <h1 class="title">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
        <path d="M12 3l8 4.5v9L12 21 4 16.5v-9L12 3z" stroke="url(#g)" stroke-width="1.5"/>
        <defs><linearGradient id="g" x1="0" y1="0" x2="24" y2="24">
          <stop stop-color="#39c0ff"/><stop offset="1" stop-color="#7cffd9"/></linearGradient></defs>
      </svg>
      <span>Form Edit Mahasiswa</span>
      <span class="badge">Rudy • 2310010148</span>
    </h1>

    <div class="card">
      <form action="<?= site_url('mahasiswa/perbaharui/'.$mahasiswa->id_mahasiswa) ?>" method="post" class="grid" autocomplete="off">
        <div class="row">
          <div>
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" class="field" value="<?= html_escape($mahasiswa->NIM) ?>" required>
          </div>
          <div>
            <label for="nama_mhs">Nama Mahasiswa</label>
            <input type="text" name="nama_mhs" id="nama_mhs" class="field" value="<?= html_escape($mahasiswa->nama_mhs) ?>" required>
          </div>
          <div>
            <label for="id_prodi">Program Studi</label>
            <select name="id_prodi" id="id_prodi" class="field" required>
              <option value="" disabled selected>Pilih Program Studi</option>
              <?php foreach ($prodi as $ps): ?>
                <option value="<?= html_escape($ps->id_prodi) ?>"><?= html_escape($ps->nama_prodi) ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="actions">
          <button type="submit" class="btn btn-primary">💾 Perbaharui</button>
          <a href="<?= site_url('mahasiswa') ?>" class="btn btn-ghost">⬅ Kembali</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
