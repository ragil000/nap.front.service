                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-info">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="card-title ">Daftar Seluruh Member</h4>
                                                <p class="card-category"> Semua member yang terdaftar ada disini</p>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="<?=base_url('admin/member/form')?>" class="btn btn-primary pull-right">
                                                    <i class="material-icons text-sm-13 text-light">add_task</i>
                                                    Daftarkan Member Baru
                                                </a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-info">
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">Email</th>
                                                    <th class="text-center">Role</th>
                                                    <th class="text-center">Status</th>
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