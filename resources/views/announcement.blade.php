@extends('layouts-admin.appAdmin')

@section('announce')

    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Announcement Page</h2>
                        
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="createAnnounce"> Create </a> <!--href="{/{ route('products.create') }}"--> 
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th width="280px">Action</th>
                </tr>
                <!--
                @/foreach ($products as $product) -->
                <tr>
                    
                    <td>1</td> <!--{/{ ++$i }} -->
                    <td><img src="" width="100px"></td> <!--/image/{/{ $product->image }} -->
                    <td>Janrelle</td> <!--{/{ $product->name }} -->
                    <td>sdadffewr</td> <!--{/{ $product->detail }} -->
                    <td>
                        <form action="" method="POST"> <!--{/{ route('products.destroy',$product->id) }} -->
     
                            <a class="btn btn-info" href="">Show</a> <!--{/{ route('products.show',$product->id) }} -->
      
                            <a class="btn btn-primary" href="">Edit</a> <!--{/{ route('products.edit',$product->id) }} -->

                            <!--
                            @/csrf
                            @/method('DELETE')
                            -->
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <!--
                @/endforeach
                -->
            </table>
        </div> 
    </div> 


@endsection