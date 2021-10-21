    <!-- Create model -->
    <div class="modal fade" id="createRoute" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="card stacked-form">
                <div class="card-header">
                    <h4 class="card-title" style="margin-left: 9rem; margin-top: 1rem">
                        Create New Route
                    </h4>
                </div>
                <div class="card-body">
                    <form id="createRouteForm">
                        <div class="form-group">
                            <label>Bus Number</label>
                            <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="route_bus_number" name="route_bus_number">
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
                            <input type="text" placeholder="Enter Trip ending location" class="form-control" id="route_to" name="route_to" required>
                        </div>
                        <div class="form-group">
                            <label>From</label>
                            <input type="text" placeholder="Enter Trip starting location" class="form-control" id="route_from" name="route_from" required>
                        </div>
                        <div class="form-group">
                            <label>Arrival Time</label>
                            <input type="text" class="form-control timepicker" placeholder="Select Time" id="route_arrival_time" name="route_arrival_time" required>
                        </div>
                        <div class="form-group">
                            <label>Departure Time</label>
                            <input type="text" class="form-control timepicker" placeholder="Select Time" id="route_departure_time" name="route_departure_time" required>
                        </div>
                        <div class="form-group">
                            <label>Cost (Rs)</label>
                            <input type="number" placeholder="Enter Trip starting location" class="form-control" id="route_cost" name="route_cost" required>
                        </div>
                        <button type="submit" class="btn btn-fill btn-success float-right">
                            Create Now
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
        $("#createRouteForm").submit(function(event) {
            cerateRoute();
            event.preventDefault();
        });
    </script>