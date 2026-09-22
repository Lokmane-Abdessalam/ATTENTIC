<!--non-changing part-->
@include("admin.Includes.topLayout")

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Excluded Students</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Show Excluded Students</li>
    </ol>
  </div>
  <!-- Container Form -->
  <div class="row">
    <div class="col-lg-12">
      <!-- Input Group -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">All Students</h6>
            </div>
            <div class="table-responsive p-3">
              <table class="display table align-items-center table-flush table-hover" id="dataTableHover">
                <thead class="thead-light">
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Group</th>
                    <th>Module</th>
                    <th>Type</th>
                  </tr>
                </thead>

                <tbody>
                  <!-- DB -->
                  <!-- sample -->
                 @foreach($excludedStudents as $excludedStudent)
                  <tr>
                    <td>{{$excludedStudent->student_id}}</td>
                    <td>{{$excludedStudent->student_first_name}}</td>
                    <td>{{$excludedStudent->student_last_name}}</td>
                    <td>{{$excludedStudent->group_id}}</td>
                    <td>{{$excludedStudent->short_cut}}</td>
                    <td>{{$excludedStudent->type}}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Container Form -->


  <!---Container Fluid-->
</div>

<!--non-changing part-->
@include("admin.Includes.bottomLayout")

<!-- Page level custom scripts -->
<script>
  $(document).ready(function() {
    let updateTrElement;

    var table = $('#dataTableHover').DataTable(({
      columnDefs: [{
        "defaultContent": "-",
        "targets": "_all"
      }],
    })); // ID From dataTable with Hover
  })
</script>
</body>

</html>