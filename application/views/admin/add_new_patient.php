<div class="patients">

    <div class="add_new_patient">
        <div class="row">
            <div class="col-md-12 col-lg-12"> 
                <form class="form-horizontal">
                    <div class="col-md-6 col-lg-6">


                        <div class="form-group ">
                            <input type='text' name='p_fname' class="form-control input-sm" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type='text' name='p_lname' class="form-control input-sm" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type='text' name='age' class="form-control input-sm" placeholder="Age">
                        </div>
                        <div class="form-group">
                            <label for="select" class="control-label">Gender</label>
                            <select name='gender' class="form-control input-sm" >
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-sm" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-sm" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label for="select" class="control-label">Purpose</label>
                            <select name='purpose' class="form-control input-sm"  >
                                <option>Tests</option>
                                <option>Report Show</option>
                                <option>Genarel Visit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="select" class="control-label">Staff/Doctor</label>
                            <select name='viewer' class="form-control input-sm" >
                                <option>Dr.Amir Hossen</option>
                                <option>Dr.Amit Khosla</option>
                                <option>St.Bikash Bhalla</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input data-toggle="datepicker" type="text" name="date" class="form-control input-sm" placeholder="Pick a Date">
                        </div> 
                        <div class="form-group">
                            <label for="select" class="control-label">Payment</label>
                            <select name='payment' class="form-control input-sm" >
                                <option>Paid</option>
                                <option>Due</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="amount" class="form-control input-sm" placeholder="Amount">
                        </div> 

                    </div>
                    <div class="col-md-6 col-lg-6">
                        
                            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control input-sm">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
