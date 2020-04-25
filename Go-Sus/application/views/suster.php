<?php
if($this->session->flashdata('message')){ 
  echo '<div class="alert alert-success">'.$this->session->flashdata('message').'</div>'; 
}
?>
<div class="container">
    <br>


    <h2 style="margin-top: 0;margin-bottom: 0; text-align:left;">Ask the Sus</h2>
    <div class="clearfix"></div>
    <br>
    <div class="table-flex">
    <table class="table table-con">
        <thead class="th">
            <tr >
                <th>No</th>
                <th>Sus Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Specialist</th>
                <th>Photo</th>
                <th>Reservation</th>

            </tr>
        </thead>
        <tbody >
            <?php $no=1; foreach ($data as $d ) {?>
                <tr  >
                    <form action="">
                        <td>
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            SUS0<?php echo $d->id ?>
                        </td>
                        <td>
                            <?php echo $d->nama ?>
                        </td>
                        <td>
                            <?php echo $d->alamat ?>
                        </td>
                        <td>
                            <?php echo $d->nama_keahlian ?>
                        </td>
                        <td><img src="<?=base_url()?>assets/ava/<?=$d->foto?>" style="width:150px; height:150px;" alt="foto"></td>
                        <td>
                            <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#edit<?php echo $d->id ?>">Chat</button>
                        </td>
                    </form>
                </tr>
                <?php } ?>
        </tbody>
    </table>
    </div>
    </div>
    </div>

    <?php $no=1; foreach ($data as $d ) {?>
        <div class="modal fade" id="edit<?php echo $d->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="box-header">
                            <h3 class="box-title">Make A Reservation</h3>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo base_url('web/tambahpesan'); ?>">
                                <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Subject" name="id" value="<?php echo $d->id ?>" readonly>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">To:</label>
                                    <input type="text" class="form-control" name="nama" placeholder="" value="<?php echo $d->nama?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Subject</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Subject" name="subjek" value="Layanan Homecare" readonly="">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Sender</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Pengirim" name="pengirim" value="<?php echo $this->session->userdata('nama') ?>" readonly>
                                </div>
                                <div>
                                    <label for="formGroupExampleInput">Message</label>
                                    <textarea class="textarea" placeholder="Message and your contact" name="pesan" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;
                                    "></textarea>
                                </div>
                                <label for="sel1">Date:</label>
                                <input id="datepicker" width="270" name="tanggal" />
                                <div class="form-group">
                                    <label for="sel1">Time:</label>
                                    <select class="form-control" id="sel1" name="jam">
                                        <option>09.00</option>
                                        <option>16.00</option>
                                        <option>20.00</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-right: 3px;">Cancel</button>

                        <button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
                            <i class="fa fa-arrow-circle-right"></i></button>

                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#table').DataTable();
                });
                $('#datepicker').datepicker({
                    uiLibrary: 'bootstrap'
                });
            </script>
            