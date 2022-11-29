@extends('layouts-admin.appAdmin')

@section('in')

        <div id="layoutSidenav">
            <div id="layoutSidenav_content"> 
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Inbox</h1>
                        <ol class="breadcrumb mb-4">
                            <!--<a class="btn btn-success" href=""> Create </a> -->
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
                                            <th>Message ID</th>
                                            <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Messege</th>
                                            <th width="280px">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Message ID</th>
                                            <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Messege</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td> <!--{/{ ++$i }} -->
                                            <td>Janrelle</td> 
                                            <td>janrelle.lubiano@carsu.edu.ph</td> 
                                            <td>09306002361</td> 
                                            <td>dsadfargfsad</td>
                                            <td>
                                                <form action="" method="POST"> <!--{/{ route('products.destroy',$product->id) }} -->
     
                                                    <a class="btn btn-info" href="showMessage">Show</a> <!--{/{ route('products.show',$product->id) }} -->
      
                                                    <!--<a class="btn btn-success" href="">Replay</a> --><!--{/{ route('products.edit',$product->id) }} -->

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