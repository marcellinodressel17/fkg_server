<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bx-cog'></i> Setting Background</span>
    </div>

    <main>
        <div class="container-fluid">
 
        <?php
          $data_cms = $this->db->get('background');
          $idbackground = $data_cms->row('idbackground');
          $bg_name = $data_cms->row('bg_name');
          $bg_color = $data_cms->row('bg_color');
          $bg_color_second = $data_cms->row('bg_color_second');
        ?>
          <form action=<?= base_url('metode/cms/update_background') ?> method="post">
            <input type="hidden" name="idbackground" class="form-control" value="<?= $idbackground ?>">
            <label>Nama Website :</label>
            <input type="text" class="form-control" name="bg_name" value="<?= $bg_name; ?>"><br>
            <label>Background Color Website :</label>
            <input type="color" class="form-control" name="bg_color" value="<?= $bg_color; ?>"><br>
            <label>Background Second Color Website :</label>
            <input type="color" class="form-control" name="bg_color_second" value="<?= $bg_color_second ?>"></br>
            <div align="right">
              <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Update</button>
            </div>
          </form>

        </div>
    </main>
</section>