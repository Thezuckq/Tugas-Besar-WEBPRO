<br>
<div class="container">
<h2 style="margin-top: 0;margin-bottom: 0;text-align: left;">Pesanan</h2>

<hr/>
<table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nid</th>
            <th>Doctor Name</th>
            <th>Subject</th>
            <th>Sender</th>
            <th>Message</th>
            <th>Date</th>
            <th>Time</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($data as $d ) {?>
            <tr>
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
                        <?php echo $d->subjek ?>
                    </td>
                    <td>
                        <?php echo $d->pengirim ?>
                    </td>
                    <td>
                        <?php echo $d->pesan ?>
                    </td>
                    <td>
                        <?php echo $d->tanggal ?>
                    </td>
                    <td>
                        <?php echo $d->jam ?>
                    </td>
                    <td><a type="button" class="btn btn-info" href="<?php echo base_url('web/pesann/'.$d->id.'/'.$d->noreservasi); ?>" onClick="return confirm('Apakah Anda Yakin?')">Done</a></td>
                </form>
            </tr>
            <?php } ?>
    </tbody>
</table>
</div>
</div>
</div>



