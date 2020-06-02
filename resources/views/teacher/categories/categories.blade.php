@extends('teacher.dashboard')

@section('teacher-content')

    <div class="card p-4">
       <div class="card-content">
         <div class="row">
             <div class="col-12">
               <form action="{{route('course-categories')}}" method="post">
                 @csrf
                   <div class="form-group">
                       <label for="category_name">Category Name</label>
                       <input type="text" class="form-control" id="category_name" name="category_name" aria-describedby="category_help" required>
                       <small id="category_help" class="form-text text-muted">Please, enter the category name</small>
                   </div>
                   <div class="form-group">
                       <button class="btn btn-primary" type="submit">ADD CATEGORY</button>
                   </div>
               </form>
             </div>
          </div>
       </div>
    </div>

    <div class="card p-4 mt-4">
       <div class="card-content">
           <table class="table">
               <thead class="thead-dark">
                    <tr>
                     <th>Category</th>
                     <th>Update</th>
                     <th>Delete</th>
                    </tr>
               </thead>
               <tbody>
               @foreach($categories as $category)
                   <tr>
                       <form action="{{ route('course-categories') }}" method="post">
                     <td>
                         @csrf
                         <input type="hidden" name="_method" value="put">
                         <input type="hidden" name="category_id" value="{{ $category->id }}">
                         <input class="form-control" type="text" value="{{ $category->category }}" name="category_name">
                     </td>
                       <td>
                           <button class="btn btn-primary" type="submit">UPDATE CATEGORY</button>
                       </td>
                       </form>
                       <td>
                           <a class="btn btn-danger delete-category" data-category="{{ $category->id }}" href="#">DELETE</a>
                       </td>
                   </tr>
               @endforeach
               </tbody>
           </table>
       </div>
    </div>


 <form action="{{ route('course-categories') }}" method="post">
        @csrf
    <!-- Modal -->
    <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deleting Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this category?
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="category_id" id="category_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">DELETE CATEGORY</button>
                </div>
            </div>
        </div>
    </div>
 </form>
@endsection
