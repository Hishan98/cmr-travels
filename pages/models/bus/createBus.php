    <!-- Create model -->
    <div class="modal fade" id="createBus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="card stacked-form">
                <div class="card-header">
                    <h4 class="card-title" style="margin-left: 9rem; margin-top: 1rem">
                        Create New Bus
                    </h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Bus Number</label>
                        <input type="text" placeholder="Enter Bus Number" class="form-control" id="input_bus_number" required>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" placeholder="Enter Name" class="form-control" id="input_bus_name" required>
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="input_bus_type">
                            <option selected hidden>Select Bus Type</option>
                            <option value="Normal">Normal</option>
                            <option value="Semi Luxury">Semi Luxury</option>
                            <option value="Luxury">Luxury</option>
                        </select>
                    </div>
                    <button class="btn btn-fill btn-success float-right" onclick="modelCreateBus()">
                        Create Now
                    </button>
                    <button class="btn btn-fill btn-danger float-right mr-2" data-dismiss="modal" aria-label="Close">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- model end -->