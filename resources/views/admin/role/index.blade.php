

@extends('layouts/contentLayoutMaster')

@section('title', 'Roles')

@section('content')
<!-- Basic Tables start -->
<div class="row" id="basic-table">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Table roles</h4>
      </div>
      <div class="card-body">
        {{-- <p class="card-text">
          Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You
          can use any example of below table for your table and it can be use with any type of bootstrap tables.
        </p> --}}
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Name of role</th>
              <th>Name </th>
              <th>Users with this role</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($roles_actives as $role)
            <tr>
                <td>
                  <img
                    src="{{asset('images/icons/angular.svg')}}"
                    class="mr-75"
                    height="20"
                    width="20"
                    alt="Angular"
                  />
                  <span class="font-weight-bold">{{ $role->name }}</span>
                </td>
                <td>{{ $role->guard_name }}</td>
                <td>
                  <div class="avatar-group">
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="top"
                      title=""
                      class="avatar pull-up my-0"
                      data-original-title="Lilian Nenez"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-5.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="top"
                      title=""
                      class="avatar pull-up my-0"
                      data-original-title="Alberto Glotzbach"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-6.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="top"
                      title=""
                      class="avatar pull-up my-0"
                      data-original-title="Alberto Glotzbach"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-7.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-pill badge-light-primary mr-1">Active</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                      <i data-feather="more-vertical"></i>
                    </button>
                    <div class="dropdown-menu">
                      @can('roles_create')
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i data-feather="edit-2" class="mr-50"></i>
                        <span>Edit</span>
                      </a>
                      @endcan

                      @can('roles_destroy')
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i data-feather="trash" class="mr-50"></i>
                        <span>Delete</span>
                      </a>
                      @endcan

                    </div>
                  </div>
                </td>
              </tr>

            @endforeach
            <tr>
              <td>
                <img
                  src="{{asset('images/icons/angular.svg')}}"
                  class="mr-75"
                  height="20"
                  width="20"
                  alt="Angular"
                />
                <span class="font-weight-bold">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class="avatar-group">
                  <div
                    data-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-placement="top"
                    title=""
                    class="avatar pull-up my-0"
                    data-original-title="Lilian Nenez"
                  >
                    <img
                      src="{{asset('images/portrait/small/avatar-s-5.jpg')}}"
                      alt="Avatar"
                      height="26"
                      width="26"
                    />
                  </div>
                  <div
                    data-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-placement="top"
                    title=""
                    class="avatar pull-up my-0"
                    data-original-title="Alberto Glotzbach"
                  >
                    <img
                      src="{{asset('images/portrait/small/avatar-s-6.jpg')}}"
                      alt="Avatar"
                      height="26"
                      width="26"
                    />
                  </div>
                  <div
                    data-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-placement="top"
                    title=""
                    class="avatar pull-up my-0"
                    data-original-title="Alberto Glotzbach"
                  >
                    <img
                      src="{{asset('images/portrait/small/avatar-s-7.jpg')}}"
                      alt="Avatar"
                      height="26"
                      width="26"
                    />
                  </div>
                </div>
              </td>
              <td><span class="badge badge-pill badge-light-primary mr-1">Active</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                    <i data-feather="more-vertical"></i>
                  </button>
                  <div class="dropdown-menu">
                    @can('roles_create')
                    <a class="dropdown-item" href="javascript:void(0);">
                      <i data-feather="edit-2" class="mr-50"></i>
                      <span>Edit</span>
                    </a>
                    @endcan

                    @can('roles_destroy')
                    <a class="dropdown-item" href="javascript:void(0);">
                      <i data-feather="trash" class="mr-50"></i>
                      <span>Delete</span>
                    </a>
                    @endcan

                  </div>
                </div>
              </td>
            </tr>



          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Basic Tables end -->



<!-- Borderless table end -->

<!-- Table head options end -->
@endsection
