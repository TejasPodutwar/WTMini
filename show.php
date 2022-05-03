<div class="modal fade" id=<?php echo "showBackdrop".$data["id"] ?> data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="showBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showBackdropLabel">Problem Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> 
            <div class="modal-body">
                <dl class="row">
                    <dt class="col-3">
                        Problem Name:
                    </dt>
                    <dd class="col-9">
                        <?php echo $data["problem"]; ?>
                    </dd>


                    <dt class="col-3">
                        Problem Link:
                    </dt>
                    <dd class="col-9">
                        <a class="problem_link_show" href=<?php echo $data["link"]; ?> >
                            <?php echo $data["link"]; ?>
                        </a>
                    </dd>


                    <dt class="col-3">
                        Problem Type:
                    </dt>
                    <dd class="col-9">
                        <?php echo $data["type"]; ?>
                    </dd>

                    <dt class="col-3">
                        Problem Approach:
                    </dt>
                    <dd class="col-9">
                        <?php echo $data["approach"]; ?>
                    </dd>

                    <dt class="col-3">
                        Time Complexity:
                    </dt>
                    <dd class="col-9">
                        <?php echo $data["time_complexity"]; ?>
                    </dd>


                    <dt class="col-3">
                        Space Complexity:
                    </dt>
                    <dd class="col-9">
                        <?php echo $data["space_complexity"]; ?>
                    </dd>

                    <dt class="col-3">
                        Problem Status:
                    </dt>
                    <dd class="col-9">
                        <?php echo $data["status"]; ?>
                    </dd>

                    <dt class="col-3">
                        Problem Level:
                    </dt>
                    <dd class="col-9">
                        <?php echo $data["level"]; ?>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>