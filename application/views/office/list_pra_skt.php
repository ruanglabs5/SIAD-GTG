<section class="content-header">
  <h1>
    Data Pra SKT
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Pra SKT</li>
  </ol>
</section>
<section class="content">
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Rekap Data Pra SKT Masyarakat Desa </h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-pra">
          <thead>
            <tr align="center">
              <td>NIK</td>
              <td>Nama</td>
              <td>Nama/No.KK</td>
              <td>Alamat Lengkap</td>
              <td>Pilihan</td>
            </tr>
          </thead>
          <tbody>
            <?php
            // foreach ($data_penduduk->result() as $penduduk) {
            // echo "
            // <tr>
            //   <td>".$penduduk->nik_no."</td>
            //   <td>".$penduduk->nik_nama."</td>
            //   <td>".$penduduk->kk_nama."<br>".$penduduk->kk_no."</td>
            //   <td>".$penduduk->alamat."</td>
            //   <td align='center'>
            //     <a class='btn btn-sm btn-success btn-circle' href='#'>
            //       <i class='fa fa-eye fa-fw'></i>
            //     </a>
            //     <a class='btn btn-sm btn-primary btn-circle' href='#'>
            //       <i class='fa fa-edit fa-fw'></i>
            //     </a>
            //   </td>
            // </tr>";
            // } ?>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>
</section>