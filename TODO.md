# TODO: Connect Mahasiswa and Prodi Views with Sections

## Steps to Complete

- [x] Create new view `application/views/data_view.php`:
  - Combine CSS styles from mahasiswa_view.php and Prodi_view.php.
  - Add tab buttons for "Mahasiswa" and "Prodi" sections.
  - Include both mahasiswa and prodi tables in the view.
  - Add JavaScript to toggle visibility of sections based on selected tab.
  - Ensure search forms and action buttons are included for each section.

- [x] Modify `application/controllers/Mahasiswa.php`:
  - Add new method `data()` that loads both Mahasiswa_model and Prodi_model.
  - Fetch $data['mahasiswa'] = $this->Mahasiswa_model->lihatData();
  - Fetch $data['prodi'] = $this->Prodi_model->lihatData();
  - Load the new view: $this->load->view('data_view', $data);

- [x] Test the implementation:
  - Access the new URL (e.g., site_url('mahasiswa/data')).
  - Verify that tabs switch correctly between Mahasiswa and Prodi data.
  - Ensure data displays properly in each section.
  - Check that search functionality works for each section.
  - Confirm action buttons (Edit, Hapus, Tambah, Cetak) function as expected.
