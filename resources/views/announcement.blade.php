@extends('layouts-admin.appAdmin')

@section('announce')

        <div id="layoutSidenav">
            <div id="layoutSidenav_content"> 
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Announcement</h1>
                        <ol class="breadcrumb mb-4">
                            <a class="btn btn-success" href="createAnnounce"> Create </a> <!--href="{/{ route('products.create') }}"--> 
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th width="280px">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td> <!--{/{ ++$i }} -->
                                            <td><img src="" width="100px"></td> <!--/image/{/{ $product->image }} -->
                                            <td>Janrelle</td> <!--{/{ $product->name }} -->
                                            <td>sdadffewr</td> <!--{/{ $product->detail }} -->
                                            <td>
                                                <form action="" method="POST"> <!--{/{ route('products.destroy',$product->id) }} -->
     
                                                    <a class="btn btn-info" href="showAnnounce">Show</a> <!--{/{ route('products.show',$product->id) }} -->
      
                                                    <a class="btn btn-primary" href="editAnnounce">Edit</a> <!--{/{ route('products.edit',$product->id) }} -->

                                                    <!--
                                                    @/csrf
                                                    @/method('DELETE')
                                                    -->
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; OceanBounties Seafood Market & Restaurant</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div> 
        
@endsection