<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
date_default_timezone_set('Asia/Jakarta');
?>
<!-- Table with stripped rows -->
<table class="table datatable">
  <thead>
    <tr>
      <th scope="col">Profile Pengguna</th>
      <tr>
      <td> Username : <?= session()->get('username'); ?></td>
      </tr>
      <tr>
      <td> Role : <?= session()->get('role'); ?></td>
      </tr>
      <tr>
      <td> Email : <?= session()->get('email'); ?></td>
      </tr>
      <tr>
      <td> Waktu Login : </td>
      </tr>
      <tr>
      <td> Status Login : Sudah Login</td>
      </tr>
    </tr>
  </thead>
  <tbody>
    <tr>
    </tr>
    <tr>
     
    </tr>
    <tr>
      
    </tr>
    <tr>
      
    </tr>
    <tr>
      
    </tr>
  </tbody>
</table>
<!-- End Table with stripped rows -->
 
<?= $this->endSection() ?>