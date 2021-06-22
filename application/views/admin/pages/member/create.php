                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-info">
                                        <span>Daftarkan member baru</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <form method="post" id="form-member" onsubmit="btnConfirm('form-member')">
                                                            <div class="row">
                                                                <input type="text" id="id" name="id" value="" hidden>
                                                                <div class="col-md-12 mb-3">
                                                                    <div class="togglebutton">
                                                                        <label>
                                                                            <input id="toggle-button" name="role" type="checkbox" value="user">
                                                                            <span class="toggle"></span>
                                                                            <span id="toggle-text">User biasa</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group" id="email-group">
                                                                        <label class="bmd-label-floating">Email</label>
                                                                        <input type="email" id="email" name="email" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="bmd-label-floating">Password</label>
                                                                        <input type="password" id="password" name="password" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="bmd-label-floating">Konfirmasi Password</label>
                                                                        <input type="password" id="passwordConfirm" name="passwordConfirm" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mt-3">
                                                                    <button type="submit" class="btn btn-info pull-right" id="button-submit">Daftarkan</button>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>