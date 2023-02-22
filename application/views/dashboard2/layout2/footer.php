<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script>
    $(window).load(function(){
        $("#metode").change(function() {
            console.log($("#metode option:selected").val());
            if ($("#metode option:selected").val() == '0') {
                $('#metode_iya').prop('hidden', 'true');
            } else {
                $('#metode_iya').prop('hidden', false);
            }
        });
    });

        // Get the modal
    var modal = document.getElementById("myModalCustome");

    // Get the button that opens the modal
    var btn = document.getElementById("BtnCustome");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
    modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }

    const bar = document.getElementById('bar');
    const close = document.getElementById('close');
    const nav = document.getElementById('navbar');

    if (bar) {
        bar.addEventListener('click', () => {
            nav.classList.add('active');
        })
    }

    if (close) {
        close.addEventListener('click', () => {
            nav.classList.remove('active');
        })
    }

    $(document).ready(function(){
        var nilai_cust1 = 600000;
        var nilai_cust2 = 400000;
        var nilai_cust3 = 200000;

        $("#form-input-cust1").css("display","none"); 
        $("#form-input-cust2").css("display","none"); 
        $(".detail").click(function(){
            if ($("input[name='total']:checked").val() == "1000000" ) { 
                var penjumlahan_cust_2 = nilai_cust1+nilai_cust2;			
                $("#form-input-cust1").slideDown("fast"); 

                document.getElementById("total-custome").innerHTML = penjumlahan_cust_2;
            } else if ($("input[name='total']:checked").val() == "800000" ){
                var penjumlahan_cust_3 = nilai_cust1+nilai_cust3;
                $("#form-input-cust1").slideUp("fast");

                document.getElementById("total-custome").innerHTML = penjumlahan_cust_3;
            } else if ($("input[name='total']:checked").val() == "600000" ){
                var penjumlahan_cust_1 = nilai_cust1;
                $("#form-input-cust1").slideUp("fast");

                document.getElementById("total-custome").innerHTML = penjumlahan_cust_1;
            }
        });
    });
    
    // Sweet Alert
    const flashData = $('.flash-data').data('flashdata');
    
    if (flashData) {
        Swal({
            title: 'Sukses',
            text: 'Data Berhasil ' + flashData,
            type: 'success'
        });
    }
    
    // Sweet Alert
    const flashGagal = $('.flash-data-gagal').data('flashdata');
    
    if (flashGagal) {
        Swal({
            title: 'Gagal',
            text: 'Data Gagal ' + flashGagal,
            type: 'error'
        });
    }
    
 
</script>
</body>

</html>