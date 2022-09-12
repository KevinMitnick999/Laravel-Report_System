@extends('layouts.admin-master-auto')

@section('title')
New Custom Column
@endsection



@section('content')
<section class="section">
  <div class="section-header">
    <h1>New Custom Column</h1>
  </div>

  <div class="section-body">

        <h2 class="text-center">Description</h2>
        <p class="text-center">user can add custom columns into the report output grid</p>
    
  <div class="container">
    
    <div id="table" class="table-editable">
      <span class="table-add glyphicon glyphicon-plus"></span>
      <table class="table">
        <tr>
          <th>Existing Column</th>
          <th>Match</th>
          <th>Match Value</th>
          <th>Source Column</th>
          <th>Source Constant</th>
          <th>Target Custom Column</th>
          <th>Actions</th>
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
            <strong>Choose</strong>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="equal" value="equal" checked>
              <label class="form-check-label" for="equal">
              =
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="in" value="in">
              <label class="form-check-label" for="in">
              <>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="greater" value="greater">
              <label class="form-check-label" for="greater">
              >
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="smaller" value="smaller">
              <label class="form-check-label" for="smaller">
              <
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="egreater" value="egreater">
              <label class="form-check-label" for="egreater">
              >=
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="esmaller" value="esmaller">
              <label class="form-check-label" for="esmaller">
              <=
              </label>
            </div>
          </td>
          <td contenteditable="true">0</td>
          <td contenteditable="true">
            <select class="type_inp" id="" name="type_inp">
              @foreach ($reportdata as $data)
                <option value="{{ $data->name }}">{{ $data->name }}</option>
              @endforeach
            </select>
          </td>
          <td contenteditable="true">0</td>
          <td contenteditable="true">
            <select class="type_inp" id="" name="type_inp">
              @foreach ($reportdata as $data)
                <option value="{{ $data->name }}">{{ $data->name }}</option>
              @endforeach
            </select>
          </td>
          <td contenteditable="true">
            <input type="button" value="Run Rule">
          </td>
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
          <td contenteditable="true">
            <strong>Choose</strong>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios1" id="equal" value="equal" checked>
              <label class="form-check-label" for="equal">
              =
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios1" id="in" value="in">
              <label class="form-check-label" for="in">
              <>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios1" id="greater" value="greater">
              <label class="form-check-label" for="greater">
              >
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios1" id="smaller" value="smaller">
              <label class="form-check-label" for="smaller">
              <
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios1" id="egreater" value="egreater">
              <label class="form-check-label" for="egreater">
              >=
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios1" id="esmaller" value="esmaller">
              <label class="form-check-label" for="esmaller">
              <=
              </label>
            </div>
          </td>
          <td contenteditable="true">0</td>
          <td contenteditable="true">
            <select class="type_inp" id="" name="type_inp">
              @foreach ($reportdata as $data)
                <option value="{{ $data->name }}">{{ $data->name }}</option>
              @endforeach
            </select>
          </td>
          <td contenteditable="true">0</td>
          <td contenteditable="true">
            <select class="type_inp" id="" name="type_inp">
              @foreach ($reportdata as $data)
                <option value="{{ $data->name }}">{{ $data->name }}</option>
              @endforeach
            </select>
          </td>
          <td contenteditable="true">
            <input type="button" value="Run Rule">
          </td>
          <td>
            <span class="table-remove glyphicon glyphicon-remove"></span>
          </td>
        </tr>
      </table>
    </div>
    
  </div>
    
  

</div>
</section>
@endsection




