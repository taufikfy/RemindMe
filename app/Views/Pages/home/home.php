<!-- content Home-->
<div class="container">
    <h3 class="my-4 col-6 col-sm-5 col-md-2 text-primary fw-bold position-relative text-decoration-underline">Priority List<span style="background-color: #71A430;"></span></h3>
    <div class="my-1 row d-flex gap-2">
        <?php foreach ($todolistuserPriority as $item): ?>
            <div class="col-12 col-md-6 rounded-4 p-4 d-flex flex-column justify-content-between border" style="background-color: #71A430; height: 200px;">
                <div>
                    <h3 class="text-white"><?= $item['catatan'] ?></h3>
                    <p class="text-white"><?= $item['keterangan'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- content Home-->
<div class="container">
    <h3 class="my-4 col-6 text-primary fw-bold position-relative text-decoration-underline">Group Priority List<span style="background-color: #71A430;"></span></h3>
    <div class="my-1 row d-flex gap-2">
        <?php foreach ($todolistgroupPriority as $item): ?>
            <div class="col-12 col-md-6 rounded-4 p-4 d-flex flex-column justify-content-between border" style="background-color: #71A430; height: 200px;">
                <div>
                    <h3 class="text-white"><?= $item['catatan'] ?></h3>
                    <p class="text-white"><?= $item['keterangan'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
