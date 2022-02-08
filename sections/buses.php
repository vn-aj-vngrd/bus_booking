<div class="col-sm">
    <div class="section-header" id="buses">
        <h3>Buses</h3>
        <p>The booked tickets will be displayed down below.</p>
    </div>
    <div class="bus">

        <?php if (!empty($_SESSION['b_one'])) { ?>

            <table class="table table-hover table-bordered" id="tb">
                <thead>
                    <tr>
                        <th colspan=3 scope="col" style="text-align: center; color: white; background-color:#303030">Bus 1 Passengers</th>
                    </tr>
                    <tr>
                        <th scope="col">Ticket no.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Destination</th>
                    </tr>
                </thead>
                <?php foreach ($_SESSION['b_one'] as $pass) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo ($pass['ticketNo']) ?></td>
                            <td><?php echo ($pass['name']) ?></td>
                            <td><?php echo ($pass['dest']) ?></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        <?php } ?>

        <?php if (!empty($_SESSION['b_two'])) { ?>

            <table class="table table-hover table-bordered" id="tb">
                <thead>
                    <tr>
                        <th colspan=3 scope="col" style="text-align: center; color: white; background-color:#303030">Bus 2 Passengers</th>
                    </tr>
                    <tr>
                        <th scope="col">Ticket no.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Destination</th>
                    </tr>
                </thead>
                <?php foreach ($_SESSION['b_two'] as $pass) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo ($pass['ticketNo']) ?></td>
                            <td><?php echo ($pass['name']) ?></td>
                            <td><?php echo ($pass['dest']) ?></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        <?php } ?>

        <?php if (!empty($_SESSION['b_three'])) { ?>

            <table class="table table-hover table-bordered" id="tb">
                <thead>
                    <tr>
                        <th colspan=3 scope="col" style="text-align: center; color: white; background-color:#303030">Bus 3 Passengers</th>
                    </tr>
                    <tr>
                        <th scope="col">Ticket no.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Destination</th>
                    </tr>
                </thead>
                <?php foreach ($_SESSION['b_three'] as $pass) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo ($pass['ticketNo']) ?></td>
                            <td><?php echo ($pass['name']) ?></td>
                            <td><?php echo ($pass['dest']) ?></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        <?php } ?>

        <?php if (!empty($_SESSION['b_four'])) { ?>

            <table class="table table-hover table-bordered" id="tb">
                <thead>
                    <tr>
                        <th colspan=3 scope="col" style="text-align: center; color: white; background-color:#303030">Bus 4 Passengers</th>
                    </tr>
                    <tr>
                        <th scope="col">Ticket no.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Destination</th>
                    </tr>
                </thead>
                <?php foreach ($_SESSION['b_four'] as $pass) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo ($pass['ticketNo']) ?></td>
                            <td><?php echo ($pass['name']) ?></td>
                            <td><?php echo ($pass['dest']) ?></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        <?php } ?>


        <?php if (!empty($_SESSION['b_five'])) { ?>

            <table class="table table-hover table-bordered" id="tb">
                <thead>
                    <tr>
                        <th colspan=3 scope="col" style="text-align: center; color: white; background-color:#303030">Bus 5 Passengers</th>
                    </tr>
                    <tr>
                        <th scope="col">Ticket no.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Destination</th>
                    </tr>
                </thead>
                <?php foreach ($_SESSION['b_five'] as $pass) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo ($pass['ticketNo']) ?></td>
                            <td><?php echo ($pass['name']) ?></td>
                            <td><?php echo ($pass['dest']) ?></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        <?php } ?>

    </div>

</div>
</div>
</div>
</div>


</main>