    <!-- Edit model -->
    <div class="modal fade" id="editRoute" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="card stacked-form">
                <div class="card-header">
                    <h4 class="card-title" style="margin-left: 9rem; margin-top: 1rem">
                        Edit Information
                    </h4>
                </div>
                <div class="card-body">
                    <form id="updateRouteForm">
                        <input type="text" class="cs-hide" id="up_route_id" name="up_route_id" />
                        <div class="form-group">
                            <label>Bus Number</label>
                            <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="up_route_bus_number" name="up_route_bus_number">
                                <option selected hidden>Select Bus Number</option>
                                <?php
                                include_once '../../controllers/dbConnection.php';
                                $loadDataSql = "SELECT * FROM bus";
                                $loadDataResult = $con->query($loadDataSql);
                                if ($loadDataResult->num_rows > 0) {
                                    // output data of each row
                                    while ($loadDataRow = $loadDataResult->fetch_assoc()) {
                                        echo '
                                            <option value="' . $loadDataRow["busNumber"] . '">' . $loadDataRow["busNumber"] . '</option>
                                        ';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>To</label>
                            <input type="text" placeholder="Enter Departure Location" class="form-control" id="up_route_to" name="up_route_to" required>
                        </div>
                        <div class="form-group">
                            <label>From</label>
                            <input type="text" placeholder="Enter Arrival Location" class="form-control" id="up_route_from" name="up_route_from" required>
                        </div>
                        <div class="form-group">
                            <label>Arrival Time</label>
                            <input type="text" class="form-control timepicker" placeholder="Enter Arrival Time" id="up_route_arrival_time" name="up_route_arrival_time" required>
                        </div>
                        <div class="form-group">
                            <label>Departure Time</label>
                            <input type="text" class="form-control timepicker" placeholder="Enter Departure Time" id="up_route_departure_time" name="up_route_departure_time" required>
                        </div>
                        <div class="form-group">
                            <label>Cost (Rs)</label>
                            <input type="number" placeholder="Enter Cost" class="form-control" id="up_route_cost" name="up_route_cost" required>
                        </div>
                        <button type="submit" class="btn btn-fill btn-success float-right">
                            Update Now
                        </button>
                        <button class="btn btn-fill btn-danger float-right mr-2" data-dismiss="modal" aria-label="Close">
                            Close
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- model end -->
    <script>
        $("#updateRouteForm").submit(function(event) {
            updateRouteFun('editRoute');
            event.preventDefault();
        });


        function SetRouterUpdateVal(id, b_num, to, from, a_time, d_time, cost) {
            document.getElementById("up_route_id").value = id;
            document.getElementById("up_route_bus_number").value = b_num;
            document.getElementById("up_route_to").value = to;
            document.getElementById("up_route_from").value = from;
            document.getElementById("up_route_arrival_time").value = a_time;
            document.getElementById("up_route_departure_time").value = d_time;
            document.getElementById("up_route_cost").value = cost;
        }
    </script>