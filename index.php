<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 26 OPP + Mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 p-3 border border-info mt-5 rounded">
                <div class="msg">
                    
                </div>
                <h3>Fill Out Student Info</h3>
                <div class="form-group mt-3">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="name form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="email form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" class="phone form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="status form-control">
                        <option value="">---Select---</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                <button class="submit form-control btn btn-info">Save Info</button>
                </div>

            </div>
            <div class="col-md-8 col-12 border border-info rounded mt-5 p-3">
                <table class="table" border='1'>
                    <thead>
                        <tr>
                            <td>SL Num</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody class="tData">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!--Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please Confirm</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Are You Sure You Wanna Delete This Information?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary btn-delete">Yes</button>
      </div>
    </div>
  </div>
</div>
<!--Update Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Student Information:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h3>Fill Out Updated Student Info</h3>
                <div class="form-group mt-3">
                    <label for="updatedname">Name Update</label>
                    <input type="text" id="updatedname" class="updatedname form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="updatedemail">Email Update</label>
                    <input type="text" id="updatedemail" class="updatedemail form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="updatedphone">Phone Update</label>
                    <input type="text" id="updatedphone" class="updatedphone form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="updatedstatus">Status Update</label>
                    <select name="updatedstatus" id="updatedstatus" class="updatedstatus form-control">
                        <option value="">---Select---</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary btn-update">Update</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="ajax.js"></script>
</body>

</html>