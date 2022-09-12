@extends('layouts.admin-master-mass')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Mass Update</h1>
  </div>

  <div class="section-body">

        <h2 class="text-center">Description</h2>
        <p class="text-center">user can mass update custom columns</p>
    
  <div class="container">
    
    <div id="table" class="table-editable">
      <span class="table-add glyphicon glyphicon-plus"></span>
      <table class="table">
        <tr>
          <th>Custom Column Name</th>
          <th>Custom Value</th>
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
          <td contenteditable="true">Here is your value</td>
          <td>
            <span class="table-remove glyphicon glyphicon-remove"></span>
          </td>
        </tr>
        <!-- This is our clonable table line -->
        <tr class="hide">
        <td contenteditable="true">
            <select class="type_inp" id="" name="type_inp">
                      @foreach ($reportdata as $data)
                        <option value="{{ $data->name }}">{{ $data->name }}</option>
                      @endforeach
            </select>
          </td>
          <td contenteditable="true">Here is your value</td>
          <td>
            <span class="table-remove glyphicon glyphicon-remove"></span>
          </td>
        </tr>
      </table>
    </div>
    
    <button id="update-btn" class="btn btn-primary">Update Column(s)</button>
    <p id="export"></p>
  </div>
    
</div>


    
</section>
@endsection
