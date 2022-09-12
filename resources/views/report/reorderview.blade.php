@extends('layouts.admin-master-reorder')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Reorder Column</h1>
  </div>

  <div class="section-body">

        <h2 class="text-center">Description</h2>
        <p class="text-center">user can reorder columns</p>
    
  <div class="container">
    
    <div id="table" class="table-editable">
      <table class="table">
        <tr>
          <th>Select Column</th>
          <th>Action</th>
          <th></th>
        </tr>
        <tr>
          <td contenteditable="true">
            <select class="type_inp" id="" name="type_inp">
                      @foreach ($reportdata as $data)
                        <option value="{{ $data->name }}">{{ $data->name }}</option>
                      @endforeach
            </select>
          </td>
          <td contenteditable="true">
            <input type="button" value="Move After" class="btn btn-primary">
            <input type="button" value="Move Before" class="btn btn-primary">
            <input type="button" value="Move To First" class="btn btn-primary">
            <input type="button" value="Move To Last" class="btn btn-primary">

          </td>
          
        </tr>
        <!-- This is our clonable table line -->
        
      </table>
    </div>
    
  </div>
    
</div>


    
</section>
@endsection
