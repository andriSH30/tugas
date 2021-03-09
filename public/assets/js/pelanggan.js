$(document).ready(function(){

    // Fungsi untuk load list pelanggan dan tampilannya
    LoadPelanggan()
    function LoadPelanggan() {
        $.ajax({
            type: "get",
            url: "/load-pelanggan",
            success: function(res){
                console.log(res)
                $('#list-pelanggan').html('');
                $("#alert").css('display','none')
                let pelanggan = res.data
                // Cek jumlah pelanggan
                if(res.jumlah == 0){
                    // Jika jumlah pelanggan 0
                    $("#alert").css('display','')
                }else{
                    // Jika ada pelanggan
                    $.each(pelanggan,function (i, data){
                        $("#list-pelanggan").append(`
                            <div class="col mb-4">
                                <div class="card" >
                                    <div id="carouselExampleControls`+i+`" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                            <img src="../`+data.foto_selfie+`" style="width: 100% !important; height: 400px !important;" class="d-block alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../`+data.foto_ktp+`" style="width: 100% !important; height: 400px !important;" class="d-block alt="...">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls`+i+`" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls`+i+`" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                    <div class="card-body click" data-id="`+data.id+`">
                                        <h5 class="card-title">`+data.nama+`</h5>
                                        <p class="card-text">Didaftarkan pada `+data.created_at+`</p>
                                    </div>
                                </div>
                            </div>
                        `)
                    })
                }
            },
            error: function(err){
                console.log(err)
            }
        })
    }

    // Klik Tombol Tambah Pelanggan (open modal)
    $("#btn-tambah-pelanggan").on("click", function(){
        // Buka Modal
        $("#modal-tambah-pelanggan").modal("show")

        // Reset Form
        $("#form-tambah-pelanggan").trigger("reset")

    })

    // Klik Tombol Simpan
    $("body").on("click", "#btn-simpan", function(){
        // Hide dan show beberpa button
        $(".btn-loading").css("display","")
        $(".btn-close").css("display","none")
        $("#btn-simpan").css("display","none")

        // Get Value dari Form
        let token = $("#token").val()
        let nama = $("#nama").val()
        let alamat = $("#alamat").val()
        let ttl = $("#ttl").val()
        let foto_ktp = $("#ktp")[0].files[0]
        let foto_selfie = $("#selfie")[0].files[0]
        let gender = $('input[name="gender"]:checked').val();

        // Cek Form tidak ada yang kosong
        if(nama != "" && alamat != "" && ttl != "" && foto_selfie != null && foto_ktp != null && gender != ""){
            // Jika tidak ada form yang kosong
            // Parsing request menggunakan FormData
            let formData = new FormData();
            formData.append('_token', token);
            formData.append('nama', nama);
            formData.append('alamat', alamat);
            formData.append('ttl', ttl);
            formData.append('ktp', foto_ktp);
            formData.append('selfie', foto_selfie);
            formData.append('gender', gender);

            // Send request menggunakan ajax
            $.ajax({
                type: "post",
                url: "/pelanggan/store",
                data: formData,
                processData: false,
                contentType: false,
                success: function(res){
                    // Hide dan show beberpa button
                    $(".btn-loading").css("display","none")
                    $(".btn-close").css("display","")
                    $("#btn-simpan").css("display","")

                    // Reload list pelanggan
                    LoadPelanggan()

                    // Close Modal
                    $("#modal-tambah-pelanggan").modal("hide")

                    Swal.fire({
                        title: 'Sukses!',
                        text: res.message,
                        icon: 'success',
                    })
                },
                error: function(err){
                    console.log(err)
                }
            })

        }else{
            // Jika ada form yang kosong
            $(".btn-loading").css("display","none")
            $(".btn-close").css("display","")
            $("#btn-simpan").css("display","")
            Swal.fire({
                title: 'Error!',
                text: 'Pastikan tidak ada form yang kosong.',
                icon: 'error',
            })
        }
    })

    // Click Card Pelanggan
    $("body").on("click",".click", function(){
        // Buka Modal
        $("#modal-detail-pelanggan").modal("show")

        // Reset Detail
        $("#kolom-nama").html("")
        $("#kolom-gender").html("")
        $("#kolom-alamat").html("")
        $("#kolom-ttl").html("")

        // Ambil ID Pelanggan
        let id = $(this).attr("data-id")
        console.log(id)

        // Cari Data Pelanggan berdasarkan ID
        $.ajax({
            type: "get",
            url: "/pelanggan/detail/"+id,
            success: function(res){
                // Isi detail pelanggan dengan data yang di return
                let pelanggan = res.data
                $("#kolom-nama").html(pelanggan.nama)
                $("#kolom-gender").html(pelanggan.jenis_kelamin)
                $("#kolom-alamat").html(pelanggan.alamat)
                $("#kolom-ttl").html(pelanggan.ttl)
            },
            error: function(err){
                console.log(err)
            }
        })
    })

})
