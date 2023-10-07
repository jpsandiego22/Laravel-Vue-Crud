<template>
    <div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Laravel Vue Crud</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 border border-primary">
                <form id="submit_data" class="p-5">
                    <div class="row p-1">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control form-control-sm" id="fname">
                            </div>
                            <div class="form-group">
                                <label for="mname">Middle Name</label>
                                <input type="text" class="form-control form-control-sm" id="mname">
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control form-control-sm " id="lname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" class="form-control form-control-sm" id="age">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <select multiple class="form-control" id="address">
                                    <option value="Cavite">Cavite</option>
                                    <option value="Batangas">Batangas</option>
                                    <option value="Quezon Province">Quezon Province</option>
                                    <option value="Bulacan">Bulacan</option>
                                    <option value="Mandaluyong">Mandaluyong</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h5 class="float-left">
                                Favorite  
                            </h5>
                            <button type="button" class="btn btn-success btn-sm float-right" onclick='addInput()'>ADD FAVORITE</button>
                            <div class="row" id='input-cont'>
                                
                            </div>
                        </div>
                        <div class="col-md-12"><br></div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-sm float-right">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
            
        </div> 
        <br><br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 border border-primary p-2">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Middle name</th>
                            <th>Prefix</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Favorite</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="modal fade" id="get_update_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="row p-1">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="e_fname">First Name</label>
                                    <input type="text" class="form-control form-control-sm" id="e_fname">
                                </div>
                                <div class="form-group">
                                    <label for="e_mname">Middle Name</label>
                                    <input type="text" class="form-control form-control-sm" id="e_mname">
                                </div>
                                <div class="form-group">
                                    <label for="e_lname">Last Name</label>
                                    <input type="text" class="form-control form-control-sm " id="e_lname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="e_age">Age</label>
                                    <input type="text" class="form-control form-control-sm" id="e_age">
                                </div>
                                <div class="form-group">
                                    <label for="e_address">Address</label>
                                    <select multiple class="form-control" id="e_address">
                                        <option value="Cavite">Cavite</option>
                                        <option value="Batangas">Batangas</option>
                                        <option value="Quezon Province">Quezon Province</option>
                                        <option value="Bulacan">Bulacan</option>
                                        <option value="Mandaluyong">Mandaluyong</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5 class="float-left">
                                    Favorite  
                                </h5>
                                <button type="button" class="btn btn-success btn-sm float-right" onclick='e_addInput()'>ADD FAVORITE</button>
                                <br>
                                <br>
                                <div class="row" id='e_input-cont'>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm float-right">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted222.')
        }
    }
</script>
