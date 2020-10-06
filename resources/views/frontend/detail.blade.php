@extends('frontendtemplate')
@section('title', 'Detail')

@section('content')

   <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Articles</h1>
            <a href="{{route('articles.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>New</a>
          </div>

          <!-- Content Row -->
          <div class="row">


            <!-- Table -->

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Article Category</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
                  <thead>
    <tr> 
      <th>No</th>

      <th>Category Name</th>

      <th>Title</th>

      <th>Body</th>

      <th>Action</th>


      
    </tr>

  </thead>
  <tbody>
    @foreach($articles as $article)
    <tr>



      <td>{{$article->id}}</td>
      <td>{{$article->category_name}}</td>
      <td>{{$article->title}}</td>
      <td>{{$article->body}}
        <a href="" class="d-block">
          <span class="badge badge-success">More</span>
        </a></td>



        <td>
          <a href="{{route('articles.edit',$article->id)}}" class="btn btn-warning">Edit</a>
          <form method="post" action="{{route('articles.destroy',$article->id)}}" class="d-inline-block" onsubmit="return confirm('Are You sure?')">
            @csrf
            @method('Delete')
            <input type="submit" name="btn-submit" value="Delete" class="btn btn-danger">
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
  

@endsection