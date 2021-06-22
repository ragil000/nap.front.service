                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-tabs card-header-info">
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <span class="nav-tabs-title">Buat Tugas:</span>
                                                <ul class="nav nav-tabs" data-tabs="tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#email" data-toggle="tab">
                                                            <i class="material-icons">email</i> Email
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#messages" data-toggle="tab">
                                                            <i class="material-icons">chat</i> Whatsapp
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="email">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form method="post" id="form-email" onsubmit="btnConfirm('form-email')">
                                                                    <div class="row">
                                                                        <input type="text" name="platform" value="email" hidden>
                                                                        <div class="col-md-12 mb-3">
                                                                            <div class="togglebutton">
                                                                                <label>
                                                                                    <input id="toggle-button-email" name="scheduleType" type="checkbox" value="nonRepeated">
                                                                                    <span class="toggle"></span>
                                                                                    <span id="toggle-text-email">Tidak berulang</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="bmd-label-floating">Waktu</label>
                                                                                <input type="text" id="hours-email" name="hours" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group" id="date-group-email">
                                                                                <label class="bmd-label-floating">Tanggal</label>
                                                                                <input type="text" id="datepicker-email" name="date" class="form-control" data-language='en' data-position='bottom left'>
                                                                            </div>
                                                                            <div class="form-group" id="days-group-email">
                                                                                <div class="form-check">
                                                                                    <div class="row">
                                                                                        <div class="col-md-3">
                                                                                            <label class="form-check-label">
                                                                                                <input class="form-check-input" name="days[]" type="checkbox" value="monday">
                                                                                                Senin
                                                                                                <span class="form-check-sign">
                                                                                                    <span class="check"></span>
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <label class="form-check-label">
                                                                                                <input class="form-check-input" name="days[]" type="checkbox" value="tuesday">
                                                                                                Selasa
                                                                                                <span class="form-check-sign">
                                                                                                    <span class="check"></span>
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <label class="form-check-label">
                                                                                                <input class="form-check-input" name="days[]" type="checkbox" value="wednesday">
                                                                                                Rabu
                                                                                                <span class="form-check-sign">
                                                                                                    <span class="check"></span>
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <label class="form-check-label">
                                                                                                <input class="form-check-input" name="days[]" type="checkbox" value="thursday">
                                                                                                Kamis
                                                                                                <span class="form-check-sign">
                                                                                                    <span class="check"></span>
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mt-3">
                                                                                        <div class="col-md-3">
                                                                                            <label class="form-check-label">
                                                                                                <input class="form-check-input" name="days[]" type="checkbox" value="friday">
                                                                                                Jum'at
                                                                                                <span class="form-check-sign">
                                                                                                    <span class="check"></span>
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <label class="form-check-label">
                                                                                                <input class="form-check-input" name="days[]" type="checkbox" value="saturday">
                                                                                                Sabtu
                                                                                                <span class="form-check-sign">
                                                                                                    <span class="check"></span>
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <label class="form-check-label">
                                                                                                <input class="form-check-input" name="days[]" type="checkbox" value="sunday">
                                                                                                Minggu
                                                                                                <span class="form-check-sign">
                                                                                                    <span class="check"></span>
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 mt-3 mb-3">
                                                                            <div class="form-group" id="email-group">
                                                                                <label class="bmd-label-floating">Email (boleh lebih dari satu)</label>
                                                                                <input type="text" id="multi-email" name="receivers" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Pesan</label>
                                                                                <textarea name="message" id="editor-message-email"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 mt-3">
                                                                            <button type="submit" class="btn btn-info pull-right">Buat</button>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="messages">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form methdo="post" id="form-whatsapp" onsubmit="btnConfirm('form-whatsapp')">
                                                                    <div class="row">
                                                                        <input type="text" name="platform" value="whatsapp" hidden>
                                                                        <div class="col-md-12 mb-3">
                                                                            <div class="togglebutton">
                                                                                <label>
                                                                                    <input id="toggle-button-whatsapp" name="scheduleType" type="checkbox" value="nonRepeated">
                                                                                    <span class="toggle"></span>
                                                                                    <span id="toggle-text-whatsapp">Tidak berulang</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="bmd-label-floating">Waktu</label>
                                                                                <input type="text" id="hours-whatsapp" name="hours" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group" id="date-group-whatsapp">
                                                                                <label class="bmd-label-floating">Tanggal</label>
                                                                                <input type="text" id="datepicker-whatsapp" name="date" class="form-control" data-language='en' data-position='bottom left'>
                                                                            </div>
                                                                            <div class="form-group" id="days-group-whatsapp">
                                                                                <div class="form-check">
                                                                                    <div class="row">
                                                                                        <div class="col-md-3">
                                                                                            <label class="form-check-label">
                                                                                                <input class="form-check-input" name="days[]" type="checkbox" value="monday">
                                                                                                Senin
                                                                                                <span class="form-check-sign">
                                                                                                    <span class="check"></span>
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <label class="form-check-label">
                                                                                                <input class="form-check-input" name="days[]" type="checkbox" value="tuesday">
                                                                                                Selasa
                                                                                                <span class="form-check-sign">
                                                                                                    <span class="check"></span>
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <label class="form-check-label">
                                                                                                <input class="form-check-input" name="days[]" type="checkbox" value="wednesday">
                                                                                                Rabu
                                                                                                <span class="form-check-sign">
                                                                                                    <span class="check"></span>
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <label class="form-check-label">
                                                                                                <input class="form-check-input" name="days[]" type="checkbox" value="thursday">
                                                                                                Kamis
                                                                                                <span class="form-check-sign">
                                                                                                    <span class="check"></span>
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mt-3">
                                                                                        <div class="col-md-3">
                                                                                            <label class="form-check-label">
                                                                                                <input class="form-check-input" name="days[]" type="checkbox" value="friday">
                                                                                                Jum'at
                                                                                                <span class="form-check-sign">
                                                                                                    <span class="check"></span>
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <label class="form-check-label">
                                                                                                <input class="form-check-input" name="days[]" type="checkbox" value="saturday">
                                                                                                Sabtu
                                                                                                <span class="form-check-sign">
                                                                                                    <span class="check"></span>
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <label class="form-check-label">
                                                                                                <input class="form-check-input" name="days[]" type="checkbox" value="sunday">
                                                                                                Minggu
                                                                                                <span class="form-check-sign">
                                                                                                    <span class="check"></span>
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 mt-3 mb-3">
                                                                            <div class="form-group" id="phone-group">
                                                                                <label class="bmd-label-floating">Nomor Whatsapp (boleh lebih dari satu)</label>
                                                                                <input type="text" id="multi-whatsapp" name="receivers" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="bmd-label-floating">Pesan</label>
                                                                                <textarea class="form-control" name="message" id="editor-message-whatsapp"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 mt-3">
                                                                            <button type="submit" class="btn btn-info pull-right">Buat</button>
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
                            </div>
                        </div>