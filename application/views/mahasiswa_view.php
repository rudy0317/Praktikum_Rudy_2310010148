<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Mahasiswa — Rudy 2310010148</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg1: #0f1216;
      --bg2: #141922;
      --card: rgba(255,255,255,.06);
      --stroke: rgba(255,255,255,.12);
      --text: #e9eef6;
      --muted: #a7b1c2;
      --accent: #39c0ff;
      --accent-2: #7cffd9;
      --radius: 20px;
      --shadow: 0 10px 30px rgba(0,0,0,.45);
    }

    * { box-sizing: border-box; }
    html, body { height: 100%; }

    body {
      margin: 0;
      font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial;
      color: var(--text);
      background: radial-gradient(80vw 80vh at 20% 10%, #0b0f14 0%, var(--bg1) 40%, var(--bg2) 100%);
      display: grid;
      place-items: center;
      padding: 24px;
    }

    .shell { width: min(1024px, 94vw); }

    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 16px;
      flex-wrap: wrap;
      gap: 12px;
    }

    .title {
      display: flex;
      align-items: center;
      gap: 12px;
      margin: 0;
    }

    .badge {
      padding: 6px 10px;
      font-size: .75rem;
      border: 1px solid var(--stroke);
      border-radius: 10px;
      color: var(--muted);
    }

    .card {
      background: var(--card);
      border: 1px solid var(--stroke);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      backdrop-filter: blur(10px);
      padding: 20px;
    }

    .btn {
      appearance: none;
      border: none;
      cursor: pointer;
      border-radius: 14px;
      padding: 10px 16px;
      font-weight: 600;
      text-decoration: none;
      display: inline-block;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
      color: #081017;
    }

    .btn-ghost {
      background: transparent;
      color: var(--muted);
      border: 1px solid var(--stroke);
    }

    .btn-sm {
      padding: 8px 12px;
      border-radius: 10px;
      font-size: .9rem;
    }

    .searchbar { display: flex; gap: 10px; flex-wrap: wrap; }

    .field {
      background: #0f131a;
      border: 1px solid #222a36;
      border-radius: 14px;
      padding: 12px 14px;
      color: var(--text);
      outline: none;
      min-width: 220px;
    }

    .field:focus {
      border-color: #39c0ff44;
      box-shadow: 0 0 0 6px rgba(57,192,255,.12);
    }

    .table-wrap {
      overflow: auto;
      border-radius: 14px;
      border: 1px solid var(--stroke);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      min-width: 640px;
      background: #0f131a;
    }

    thead th {
      position: sticky;
      top: 0;
      background: #121823;
      color: #cfe6ff;
      text-align: left;
      font-size: .9rem;
      padding: 14px 16px;
      border-bottom: 1px solid #1f2734;
    }

    tbody td {
      padding: 12px 16px;
      border-bottom: 1px solid #1a2230;
      color: var(--text);
    }

    tbody tr:hover { background: #101722; }

    .actions { display: flex; gap: 8px; }

    .footer {
      margin-top: 14px;
      color: var(--muted);
      font-size: .85rem;
      text-align: right;
    }

    select {
      background: #0f131a;
      border: 1px solid #222a36;
      border-radius: 14px;
      padding: 6px 10px;
      color: var(--text);
      outline: none;
      font-size: .9rem;
    }

    select:focus {
      border-color: #39c0ff44;
      box-shadow: 0 0 0 6px rgba(57,192,255,.12);
    }
  </style>
</head>
<body>
  <div class="shell">
    <div class="header">
      <h1 class="title">
        <div style="position: relative;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true" style="cursor: pointer;" onclick="toggleDropdown()">
            <path d="M12 3l8 4.5v9L12 21 4 16.5v-9L12 3z" stroke="url(#g)" stroke-width="1.5" />
            <defs>
              <linearGradient id="g" x1="0" y1="0" x2="24" y2="24">
                <stop stop-color="#39c0ff" />
                <stop offset="1" stop-color="#7cffd9" />
              </linearGradient>
            </defs>
          </svg>
          <select id="data-select" onchange="navigateTo(this.value)" style="position: absolute; top: 0; left: 0; opacity: 0; width: 28px; height: 28px; cursor: pointer;">
            <option value="mahasiswa" selected>Data Mahasiswa</option>
            <option value="prodi">Data Program Studi</option>
          </select>
        </div>
        <span>Data Mahasiswa</span>
        <span class="badge">Rudy • 2310010148</span>
      </h1>

      <div class="searchbar">
        <form method="get" action="" style="display:flex; gap:10px">
          <input class="field" type="text" name="q" placeholder="Cari NIM / Nama..." value="<?= html_escape($this->input->get('q')) ?>">
          <button class="btn btn-ghost" type="submit">Cari</button>
        </form>
        <a href="<?= site_url('mahasiswa/tambah') ?>" class="btn btn-primary">+ Tambah</a>
        <a href="<?= site_url('mahasiswa/cetak') ?>" class="btn btn-ghost">Cetak</a>
      </div>
    </div>

    <div class="card">
      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th style="width:70px">No</th>
              <th style="min-width:140px">NIM</th>
              <th>Nama</th>
              <th>Program Studi</th>
              <th style="width:200px">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach ($mahasiswa as $row): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= html_escape($row->NIM) ?></td>
                <td><?= html_escape($row->nama_mhs) ?></td>
                <td><?= html_escape($row->nama_prodi ?? '-') ?></td>
                <td>
                  <div class="actions">
                    <a class="btn btn-ghost btn-sm" href="<?= site_url('mahasiswa/edit/'.$row->id_mahasiswa) ?>">Edit</a>
                    <a class="btn btn-ghost btn-sm" href="<?= site_url('mahasiswa/hapus/'.$row->id_mahasiswa) ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>

            <?php if (empty($mahasiswa)): ?>
              <tr>
                <td colspan="5" style="color:var(--muted); text-align:center; padding:18px">
                  Belum ada data.
                </td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

      <div class="footer">Total: <?= isset($no) ? $no-1 : 0 ?> data</div>
    </div>
  </div>

  <script>
    function navigateTo(value) {
      if (value === 'mahasiswa') {
        window.location.href = '<?= site_url('mahasiswa') ?>';
      } else if (value === 'prodi') {
        window.location.href = '<?= site_url('prodi') ?>';
      }
    }
  </script>
</body>
</html>
