<br>
<br>
<br>
<br>
<div class="container">
  <h2>Harga Sewa Bus Kita kemana</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Tujuan</div>
      <div class="col col-1">Durasi</div>
      <div class="col col-2">biaya</div>
      <div class="col col-3">Kelas Kendaraan</div>
      <div class="col col-4">Jenis Kendaraan</div>
      <div class="col col-5">Keterangan</div>
    </li>
<?php 
      //cek apakah ada data atau tidak di database
      if (count($hasil) > 0) 
      {
        // jika terdapat data
        foreach ($hasil as $key => $list)
        {
          ?>
    <li class="table-row">
      <div class="col col-1" data-label="Tujuan"><?php echo $list ['NAMA_KOTA']; ?></div>
      <div class="col col-1" data-label="Durasi"><?php echo $list ['DURASI']; ?></div>
      <div class="col col-2" data-label="BIAYA"><p><?php echo $list ['BIAYA']; ?></p></div>
      <div class="col col-3" data-label="jenis_armada"><p><?php echo $list ['TIPE_JENIS_ARMADA']; ?></p>
      </div>
      <div class="col col-4" data-label="kelas_armada"><p><?php echo $list ['TIPE_KELAS_ARMADA']; ?></p>
      </div>
      <div class="col col-2" data-label="Keterangan"><p><?php echo $list ['KETERANGAN']; ?></p></div>
    </li>
        <?php
        }
      }
      else
      {
        // jika tidak terdapat data
        ?>
        <h1>Data tidak ditemukan.....</h1>
        <?php
      }
      ?>
        </ul>
</div>
    </li>
  </ul>
</div>