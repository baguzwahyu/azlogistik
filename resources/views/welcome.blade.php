<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie List</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <!-- jquery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <!-- SweetAlert2 -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script
        nonce="e6c1a309-fe8e-440d-8396-baddc6d9fb5e">(function (w, d) { !function (a, e, t, r) { a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zaraz = { deferred: [] }, a.zaraz.q = [], a.zaraz._f = function (e) { return function () { var t = Array.prototype.slice.call(arguments); a.zaraz.q.push({ m: e, a: t }) } }; for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e); a.addEventListener("DOMContentLoaded", (() => { var t = e.getElementsByTagName(r)[0], z = e.createElement(r), n = e.getElementsByTagName("title")[0]; for (n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.x = Math.random(), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.zarazData.q = []; a.zaraz.q.length;) { const e = a.zaraz.q.shift(); a.zarazData.q.push(e) } z.defer = !0; for (const e of [localStorage, sessionStorage]) Object.keys(e).filter((a => a.startsWith("_zaraz_"))).forEach((t => { try { a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t)) } catch { a.zarazData["z_" + t.slice(7)] = e.getItem(t) } })); z.referrerPolicy = "origin", z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t) })) }(w, d, 0, "script"); })(window, document);</script>
</head>

<body class="hold-transition layout-top-nav text-sm">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        
            <h1 class="text-red">Daftar Movie</h1>
        
            <ul class="navbar-nav ml-auto">
        
            </ul>
        </nav>
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-2"></div>
                        <div class="col-sm-8" style="margin-top: 50px;margin-bottom: 10px;">
                            <h1 class="m-0">Daftar List</h1>
                        </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="card">                        
                                <div class="card-body">
                                    <table id="list-application" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width:100px">Poster</th>
                                                <th style="width:100px">Judul Film</th>
                                                <th>Sinopsis</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <form class="form-horizontal no-margin" id="form" action="#" method="post" />
                    <div>
                        <span style="font-weight:bold">Sinopsis</span> <span id="title"></span>
                    </div>
                    <br>
                    <div class="form-group" id="overview">
                        
                    </div>
                    <button type="button" class="btn btn-secondary btn-sm color-palette btn-labeled legitRipple" data-dismiss="modal"
                        style="margin-left: 190px;border-radius: 24px;padding-top: 10px;padding-bottom: 10px;padding-right: 20px;padding-left: 20px;font-weight: bold;">
                        Tutup
                    </button>
                </div>
                </form>
            </div>

        </div>
    </div>
    <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>

    <script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://adminlte.io/themes/v3/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jszip/jszip.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js?v=3.2.0"></script>
    <script>
        $(function () {
            dataTable = $('#list-application').DataTable({
                searching: true,
                stateSave: true,
                processing: true,
                serverSide: true,
                filter: false,
                info: false,
                lengthChange: true,
                responsive: false,
                order: [[1, "asc"]],
                ajax: {
                    url: "{{url('/get_movie')}}",
                    type: "GET",
                    data: function (data) {
                    }
                },
                columnDefs: [
                    { "width": "100px", className: "text-center", targets: [0, 1] },
                    // { className: "text-right", targets: [2] },
                    {
                        render: function (data, type, row) {
                            // return `<div class="bg-success text-white">${row.data}</div>`;
                            return `<img src="https://www.themoviedb.org/t/p/w220_and_h330_face/${data}" alt="" width="300" height="300">`;
                            // return `${row.data}`;
                            
                        }, targets: [0]
                    },
                    {
                        render: function (data, type, row) {
                            return `
                                <span href="" class="text-dark">Sinopsis film ${data} </span><a href="javascript:void(0)" data-id="${row.id}" class="btn_edit"><i class="fas fa-info-circle"></i></a>
                            `;
                            
                        }, targets: [2]
                    }
                ],
                columns: [
                    { data: "poster_path" },
                    { data: "original_title" },
                    { data: "original_title" },
                ]
            });

            $(document).on("click", ".btn_edit", function () {
                var id = $(this).attr('data-id');
                var data = {
                    _token: "{{ csrf_token() }}"
                };
                $.ajax({
                    url: `{{url('/get_movie_detail')}}/${id}`,
                    dataType: 'json',
                    data: data,
                    type: 'GET',
                    success: function(result){
                        $("#editModal").modal('show');
                        $('#title').html(result.data.original_title);
                        $('#overview').html(result.data.overview);
                    }
                })
            });
        });
    </script>
</body>

</html>