<main role="main" class="main-container" id="book">

    <div class="container-fluid a">
        <div class="row">
            <div class="col-sm">

                <div class="section-header">
                    <h3>Book Ticket</h3>
                    <p>Fill out the form below to book a ticket.</p>
                </div>
                <a><span>Fare:</span> PHP <?php echo $fare ?>.00</a>
                <div class="booking-form">
                    <form method="POST" action="">

                        <div class="input-field">
                            <i class="bx bx-user"></i>
                            <input type="text" name="name" placeholder="Passenger Name" required>
                        </div>

                        <div class="input-field">
                            <i class="bx bx-map"></i>
                            <input type="text" name="dest" placeholder="Destination" required>
                        </div>

                        <div class="input-field">
                            <i class="bx bx-bus"></i>
                            <select name="bus" required>
                                <option value="" disabled selected>Select Bus</option>
                                <option value="1">Bus 1</option>
                                <option value="2">Bus 2</option>
                                <option value="3">Bus 3</option>
                                <option value="4">Bus 4</option>
                                <option value="5">Bus 5</option>
                            </select>
                        </div>
                        
                        <div>
                            <input class="btn-book" type="submit" name="submit" value="Submit" formmethod="POST" />
                        </div>
                        <a id="down" href="#buses"><i class="bi bi-arrow-down-circle"></i></a>
                    </form>
                </div>

                <?php if (!empty($passenger)) { ?>
                    <table class="table table-hover table-bordered" id="tb">
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: center; color: white; background-color:#303030">Passenger Ticket Information</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Name</td>
                                <td><?php echo $passenger['name'] ?></td>
                            </tr>

                            <tr>
                                <th scope="row">Destination</td>
                                <td><?php echo $passenger['dest'] ?></td>
                            </tr>

                            <tr>
                                <th scope="row">Ticket No.</td>
                                <td><?php echo $passenger['ticketNo'] ?></td>
                            </tr>

                            <tr>
                                <th scope="row">Bus No.</td>
                                <td><?php echo $passenger['bus'] ?></td>
                            </tr>

                            <tr>
                                <th scope="row">Total Fare</td>
                                <td>PHP <?php echo $passenger['fare'] ?>.00</td>
                            </tr>

                        </tbody>
                    </table>
                <?php } ?>

            </div>