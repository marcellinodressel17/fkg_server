<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-user'></i> Data Jadwal Mengajar</span>
    </div>

    <main>
        <div class="container-fluid">
        <br>
        <?php 
        $ci = get_instance();
        $user_type = $ci->session->userdata('user_type');

        $this->db->where('idrole', $user_type);
        $data_role = $this->db->get('role')->row('name_role');

        if($data_role == "administrator"){ ?>
            <a href="<?= base_url("/project/school/administrator/schedule_employee/add_schedule"); ?>"><button class="btn btn-success" type="button"><i class='bx bxs-file-plus'></i> Tambah Data</button></a>
                <br><br><table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No. </th>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Pelajaran</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach($schedule->result() as $v_schedule){
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $v_schedule->name; ?></td>
                            <td><?= $v_schedule->name_class; ?></td>
                            <td><?= $v_schedule->name_lesson; ?></td>
                            <td><?= $v_schedule->day; ?></td>
                            <td><?= $v_schedule->start_shift; ?> - <?= $v_schedule->end_shift; ?></td>
                            <td><?= anchor('/project/school/administrator/schedule_employee/edit_schedule/' . $v_schedule->idschedule, '<div class="btn btn-primary btn-sm"><i class="bx bx-edit" ></i> Ubah</div>') ?>
                            <?= anchor('/project/school/administrator/schedule_employee/delete_schedule/' . $v_schedule->idschedule, '<div class="btn btn-danger btn-sm"><i class="bx bxs-comment-x" ></i> Hapus</div>') ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
        <?php }else{?>
                <br><br><table class="table table-striped">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Senin</strong>
                            </div>
                            <div class="card-body">
                            <?php

                            $this->db->where('day', 'Senin');
                            $this->db->where('username', $ci->session->userdata('username'));
                            $this->db->join('class', 'class.idclass = schedule.idclass');
                            $this->db->join('lesson', 'lesson.idlesson = schedule.idlesson');
                            $this->db->join('shift', 'shift.idshift = schedule.idshift');
                            $this->db->join('user', 'user.iduser = schedule.iduser');
                            $data_schedule = $this->db->get('schedule');

                            if($data_schedule->num_rows() == 0){
                                echo "<p class='card-text'>Jadwal Tidak Ada</p>";
                            }else{
                                foreach($data_schedule->result() as $v_data_schedule){
                            ?>
                            <p class="card-text"><?= $v_data_schedule->start_shift; ?> - <?= $v_data_schedule->end_shift; ?> Kelas : <?= $v_data_schedule->name_class; ?></p>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Selasa</strong>
                            </div>
                            <div class="card-body">
                            <?php

                                $this->db->where('day', 'Selasa');
                                $this->db->where('username', $ci->session->userdata('username'));
                                $this->db->join('class', 'class.idclass = schedule.idclass');
                                $this->db->join('lesson', 'lesson.idlesson = schedule.idlesson');
                                $this->db->join('shift', 'shift.idshift = schedule.idshift');
                                $this->db->join('user', 'user.iduser = schedule.iduser');
                                $data_schedule2 = $this->db->get('schedule');

                                if($data_schedule2->num_rows() == 0){
                                    echo "<p class='card-text'>Jadwal Tidak Ada</p>";
                                }else{
                                    foreach($data_schedule2->result() as $v_data_schedule2){
                            ?>
                                <p class="card-text"><?= $v_data_schedule2->start_shift; ?> - <?= $v_data_schedule2->end_shift; ?> Kelas : <?= $v_data_schedule2->name_class; ?></p>
                            <?php
                                    }
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Rabu</strong>
                            </div>
                            <div class="card-body">
                            <?php

                            $this->db->where('day', 'Rabu');
                            $this->db->where('username', $ci->session->userdata('username'));
                            $this->db->join('class', 'class.idclass = schedule.idclass');
                            $this->db->join('lesson', 'lesson.idlesson = schedule.idlesson');
                            $this->db->join('shift', 'shift.idshift = schedule.idshift');
                            $this->db->join('user', 'user.iduser = schedule.iduser');
                            $data_schedule3 = $this->db->get('schedule');

                            if($data_schedule3->num_rows() == 0){
                                echo "<p class='card-text'>Jadwal Tidak Ada</p>";
                            }else{
                                foreach($data_schedule3->result() as $v_data_schedule3){
                            ?>
                            <p class="card-text"><?= $v_data_schedule3->start_shift; ?> - <?= $v_data_schedule3->end_shift; ?> Kelas : <?= $v_data_schedule3->name_class; ?></p>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Kamis</strong>
                            </div>
                            <div class="card-body">
                            <?php

                            $this->db->where('day', 'Kamis');
                            $this->db->where('username', $ci->session->userdata('username'));
                            $this->db->join('class', 'class.idclass = schedule.idclass');
                            $this->db->join('lesson', 'lesson.idlesson = schedule.idlesson');
                            $this->db->join('shift', 'shift.idshift = schedule.idshift');
                            $this->db->join('user', 'user.iduser = schedule.iduser');
                            $data_schedule4 = $this->db->get('schedule');

                            if($data_schedule4->num_rows() == 0){
                                echo "<p class='card-text'>Jadwal Tidak Ada</p>";
                            }else{
                                foreach($data_schedule4->result() as $v_data_schedule4){
                            ?>
                            <p class="card-text"><?= $v_data_schedule4->start_shift; ?> - <?= $v_data_schedule4->end_shift; ?> Kelas : <?= $v_data_schedule4->name_class; ?></p>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Jumat</strong>
                            </div>
                            <div class="card-body">
                            <?php

                            $this->db->where('day', 'Jumat');
                            $this->db->where('username', $ci->session->userdata('username'));
                            $this->db->join('class', 'class.idclass = schedule.idclass');
                            $this->db->join('lesson', 'lesson.idlesson = schedule.idlesson');
                            $this->db->join('shift', 'shift.idshift = schedule.idshift');
                            $this->db->join('user', 'user.iduser = schedule.iduser');
                            $data_schedule5 = $this->db->get('schedule');

                            if($data_schedule5->num_rows() == 0){
                                echo "<p class='card-text'>Jadwal Tidak Ada</p>";
                            }else{
                                foreach($data_schedule5->result() as $v_data_schedule5){
                            ?>
                            <p class="card-text"><?= $v_data_schedule5->start_shift; ?> - <?= $v_data_schedule5->end_shift; ?> Kelas : <?= $v_data_schedule5->name_class; ?></p>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Sabtu</strong>
                            </div>
                            <div class="card-body">
                            <?php

                            $this->db->where('day', 'Sabtu');
                            $this->db->where('username', $ci->session->userdata('username'));
                            $this->db->join('class', 'class.idclass = schedule.idclass');
                            $this->db->join('lesson', 'lesson.idlesson = schedule.idlesson');
                            $this->db->join('shift', 'shift.idshift = schedule.idshift');
                            $this->db->join('user', 'user.iduser = schedule.iduser');
                            $data_schedule6 = $this->db->get('schedule');

                            if($data_schedule6->num_rows() == 0){
                                echo "<p class='card-text'>Jadwal Tidak Ada</p>";
                            }else{
                                foreach($data_schedule6->result() as $v_data_schedule6){
                            ?>
                            <p class="card-text"><?= $v_data_schedule6->start_shift; ?> - <?= $v_data_schedule6->end_shift; ?> Kelas : <?= $v_data_schedule6->name_class; ?></p>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- <thead>
                        <tr>
                            <th scope="col">No. </th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Pelajaran</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Jam</th>
                        </tr>
                    </thead>
                        <?php
                            $no = 1;
                            foreach($schedule->result() as $v_schedule){
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $v_schedule->name_class; ?></td>
                            <td><?= $v_schedule->name_lesson; ?></td>
                            <td><?= $v_schedule->day; ?></td>
                            <td><?= $v_schedule->start_shift; ?> - <?= $v_schedule->end_shift; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    <tbody>

                    </tbody>
                </table> -->
        <?php } ?>
        </div>
    </main>

</section>

<section class="section-p1">
    <div class="preloader">
        <div class="loading">
            <img src="<?= base_url('assets/image/loading.gif'); ?>" width="120">
            <p><strong>Harap Tunggu</strong></p>
        </div>
    </div>
</section>