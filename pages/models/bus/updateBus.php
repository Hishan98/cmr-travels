    <!-- Edit model -->
    <div class="modal fade" id="editBus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form id="modelUpdateBusForm">
                <div class="card stacked-form">
                    <div class="card-header">
                        <h4 class="card-title" style="margin-left: 9rem; margin-top: 1rem">
                            Edit Information
                        </h4>
                    </div>
                    <div class="card-body">
                        <input type="text" class="cs-hide" id="up_bus_num" name="up_bus_num" />
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" placeholder="Enter Name" class="form-control" id="up_bus_name" name="up_bus_name" value="<?= $busName ?>" />
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="up_bus_type" name="up_bus_type">
                                <option hidden>Select Bus Type</option>
                                <option value="1">Normal</option>
                                <option value="2">Semi Luxury</option>
                                <option value="3">Luxury</option>
                            </select>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-success float-right">
                            Update Now
                        </button>
                        <button class="btn btn-fill btn-danger float-right mr-2" data-dismiss="modal" aria-label="Close">
                            Close
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- model end -->
    <script>
        $("#modelUpdateBusForm").submit(function(event) {
            modelUpdateBusFun('editBus');
            event.preventDefault();
        });
    </script>