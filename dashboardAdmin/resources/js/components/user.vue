<template>
    <div class="p-0">
        <div class="card card-primary">
            <div class="card-header ui-sortable-handle" style="cusor:move;">
                <h3 class="card-title">
                    <i class="fas fa-users mr-1"></i>
                    Users
                </h3>
                <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item mr-1">
                            <button class="btn btn-sm btn-primary"><i class="fas fa-user"></i> All Users</button>
                        </li>
                        <li class="nav-item mr-1">
                            <button class="btn btn-sm btn-primary"><i class="fas fa-plus-circle"></i> Add Users</button>
                        </li>
                        <li class="nav-item mr-1">
                            <button class="btn btn-sm btn-primary"><i class="fas fa-user"></i> All Users</button>
                        </li>
                        <li class="nav-item">
                            
                            <div class="input-group mt-0 input-group-sm" style="width: 350px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="search by name, email">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Date Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i>View</button>
                                <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>Edit</button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>


