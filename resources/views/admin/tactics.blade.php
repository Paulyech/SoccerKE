@extends('layouts.main')
  @section('content')

          <div class="content">
            <div class="container-fluid">
              <div class="row">

                <div class="col-md-12 ml-auto mr-auto">
                  <div class="students">
                    <h3 class="title text-center">Tactics</h3>
                    <br />
                    <ul class="nav nav-pills nav-pills-info nav-pills-icons justify-content-center" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#search" role="tablist">
                          <i class="material-icons">search</i> Search
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#new" role="tablist">
                          <i class="material-icons">sports_soccer</i> New Tactic
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content tab-space tab-subcategories">
                      <div class="tab-pane active" id="search">
                        <div class="content">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="card">
                                  <div class="card-header card-header-primary card-header-icon">
                                    <div class="card-icon">
                                      <i class="material-icons">assignment</i>
                                    </div>
                                    <h4 class="card-title">Tactics</h4>
                                  </div>
                                  <div class="card-body">
                                    <div class="toolbar">
                                      <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="material-datatables">
                                      <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                        <thead>
                                          <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Strengths</th>
                                            <th>Weaknesses</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                          </tr>
                                        </thead>
                                        <tfoot>
                                          <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Strengths</th>
                                            <th>Weaknesses</th>
                                            <th class="text-right">Actions</th>
                                          </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($tactics as $tactic)
                                              <tr>
                                                <td>{{ $tactic->title }}</td>
                                                <td>{{ Str::limit($tactic->description, 100) }}</td>
                                                <td>{{ Str::limit($tactic->strengths, 100) }}</td>
                                                <td>{{ Str::limit($tactic->weaknesses, 100) }}</td>
                                                <td class="text-right">
                                                  <form method="post" action="/delete_tactic/{{$tactic->id}}" enctype="multipart/form-data" name="deleteForm">
                                                      {{ csrf_field() }}
                                                      <input type="submit" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm" value="DELETE">
                                                  </form>
                                              </td>
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
                        </div>
                      </div>
                      <div class="tab-pane" id="new">
                        <div class="content">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-md-6 mr-auto ml-auto">
                                <div class="card ">
                                  <div class="card-header card-header-primary card-header-icon">
                                    <div class="card-icon">
                                      <i class="material-icons">attach_file</i>
                                    </div>
                                    <h4 class="card-title">New Tactic</h4>
                                  </div>
                                  <div class="file-import col-md-12 mr-auto ml-auto">

                                    <form id="addTactic" method="post" action="{{ url('admin/tactics/new') }}" enctype="multipart/form-data">
                                      {{ csrf_field() }}

                                      <div class="card-body ">
                                        <div class="form-group">
                                          <label class="bmd-label-floating"> Title *</label>
                                          <input type="text" class="form-control" id="title" name="title" required="true">
                                        </div>
                                        <div class="form-group">
                                          <label class="bmd-label-floating"> Description *</label>
                                          <textarea class="form-control" id="description" name="description" required="true"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> Strengths *</label>
                                            <textarea class="form-control" id="strengths" name="strengths" required="true"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> Weaknesses *</label>
                                            <textarea class="form-control" id="weaknesses" name="weaknesses" required="true"></textarea>
                                          </div>
                                        <div class="category form-category">* Required fields</div>
                                      </div>
                                      <div class="col-md-4 col-sm-4">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                              <img src="../../assets/img/image_placeholder.jpg" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                              <span class="btn btn-primary btn-file">
                                              <span class="fileinput-new">Upload Cover Image</span>
                                              <span class="fileinput-exists">Change Cover Image</span>
                                              <input type="file" id="image" name="image" required="true">
                                              </span>
                                              <br />
                                              <a href="" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                      </div>
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  @endsection
@section('scripts')
<script src="../../assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="../../assets/js/plugins/jquery.validate.min.js"></script>
<script src="../../assets/js/plugins/bootstrap-selectpicker.js"></script>
    <script>
      function setFormValidation(id) {
        $(id).validate({
          /* Add custom validation here -- rules,messages e.t.c */

          highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
          },
          success: function(element) {
            $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
          },
          errorPlacement: function(error, element) {
            $(element).closest('.form-group').append(error);
          },
        });
      }
      $(document).ready(function() {
        setFormValidation('#addTactic');
      });
    </script>
    <script>
      $(document).ready(function() {
        $('#datatables').DataTable({
          "pagingType": "full_numbers",
          "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
          ],
          responsive: true,
          language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
          }
        });

        var table = $('#datatable').DataTable();

      });
    </script>
@endsection