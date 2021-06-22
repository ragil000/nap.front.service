                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-info">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="card-title ">Daftar Seluruh Tugas</h4>
                                                <p class="card-category"> Semua tugas yang dibuat ada disini</p>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="<?=base_url('admin/schedule/form')?>" class="btn btn-primary pull-right">
                                                    <i class="material-icons text-sm-13 text-light">add_task</i>
                                                    Buat Tugas Baru
                                                </a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="togglebutton">
                                                    <label>
                                                        <input id="toggle-button-self" type="checkbox">
                                                        <span class="toggle"></span>
                                                        <span id="toggle-text-self">Hanya tugas sendiri</span>
                                                    </label>
                                                </div>
                                                <div class="togglebutton">
                                                    <label>
                                                        <input id="toggle-button-active" type="checkbox">
                                                        <span class="toggle"></span>
                                                        <span id="toggle-text-active">Hanya tugas aktif</span>
                                                    </label>
                                                </div>
                                                <div class="togglebutton">
                                                    <label>
                                                        <input id="toggle-button-repeated" type="checkbox">
                                                        <span class="toggle"></span>
                                                        <span id="toggle-text-repeated">Hanya tugas berulang</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-info">
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">Pembuat</th>
                                                    <th class="text-center">Platform</th>
                                                    <th class="text-center">Jenis Tugas</th>
                                                    <th class="text-center">Waktu</th>
                                                    <th class="text-center">Keterangan</th>
                                                    <th class="text-center"></th>
                                                </thead>
                                                <tbody id="data-table" class="text-sm-13">
                                                    <!-- <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">
                                                            <span class="badge badge-info">ragilmanggalaning42@gmail.com</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span>
                                                                <i class="material-icons text-sm-13 text-info">mail</i>
                                                                Email
                                                            </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span>
                                                                <i class="material-icons text-sm-13 text-warning">repeat</i>
                                                                Berulang
                                                            </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span>senin, selasa, rabu, kamis, jum'at, sabtu, minggu</span>
                                                            <span class="badge badge-warning">12:30</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span>
                                                                <i class="material-icons text-sm-13 text-success">history</i>
                                                                Hari ini
                                                            </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="togglebutton">
                                                                <label>
                                                                    <input type="checkbox" checked>
                                                                    <span class="toggle"></span>
                                                                    Aktif
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                            <ul class="pagination pagination-info" id="pagination">
                                                <!-- <li class="page-item"><a href="javascript:void(0);" class="page-link"> prev</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">1</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">2</a></li>
                                                <li class="active page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">4<div class="ripple-container"></div></a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">next </a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Classic Modal -->
                        <div class="modal fade" id="modal-schedule" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title">Detail Pesan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="material-icons">clear</i>
                                    </button>
                                    </div>
                                    <div class="modal-body" id="modal-schedule-detail">
                                        
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  End Modal -->