<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Visi Misi</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_visimisi',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_visi_missi]'>
                    <tr><th width='300px' scope='row'>Judul Visi</th>   <td><input type='text' class='form-control' name='a' value='$rows[vision]'></td></tr>
                    <tr><th width='200px' scope='row'>Deskripsi Visi</th>   <td><textarea id='editor1' type='text' style='height:350px' class='form-control' name='a'>$rows[keterangan_vission]</textarea></td></tr>
                        <tr><th width='300px' scope='row'>Judul Misi</th>   <td><input type='text' class='form-control' name='a' value='$rows[mission]'></td></tr>
                    <tr><th width='200px' scope='row'>Deskripsi Misi</th>   <td><textarea id='editor2' type='text' style='height:350px' class='form-control' name='a'>$rows[keterangan_mission]</textarea></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    
                  </div>
            </div></div></div>";
            echo form_close();