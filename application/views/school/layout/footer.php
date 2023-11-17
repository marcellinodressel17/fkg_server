<script type="text/javascript">
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

    $(document).ready(function() {
        $(".preloader").fadeOut();
    })

    //get lesson
    $(document).ready(function() {
        $("#idlesson").select2({
            ajax: {
                url: '<?= base_url('/project/school/administrator/schedule_employee/getdatalesson'); ?>',
                type: "POST",
                dataType: 'json',
                delay: 200,
                data: function(params){
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function(response){
                    return {
                        results: response
                    };
                },
                cache:true
            }
        });
    });

    //get user
    $('#idlesson').change(function() {
        var id_lesson = $("#idlesson").val();
        $("#iduser").select2({
            ajax: {
                url: '<?= base_url('/project/school/administrator/schedule_employee/getdatauser/'); ?>' + id_lesson,
                type: "POST",
                dataType: 'JSON',
                delay: 200,
                data: function(params) {
                    return{
                        searchTerm: params.term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });

    $('.btn-role').on('click', function(e){
        var id = e.target.dataset.id;
        // show_loading()
        $.ajax({
            method: "POST",
            url:    "<?= base_url('/project/school/administrator/access/edit_access/') ?>",
            data: "idrole"+id,
            success: function(response){
                // hide_loading()
                $('.tampil-modal').html(response);
                $('.modal-action').modal({
                    backdrop:'static',
                    keyboard:false
                });
            }

            // /project/school/administrator/access/edit_access/
        });
    });

</script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script> -->
  </body>

</html>