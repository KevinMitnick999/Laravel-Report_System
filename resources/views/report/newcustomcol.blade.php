@extends('layouts.admin-master-col')

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
          <th>Column Name</th>
          <th>Description</th>
          <th>Type</th>
          <th>Size</th>
          <th>Decimal Size</th>
          <th>Manual Editing</th>
          <th>Mass Update</th>
          <th></th>
        </tr>
        <tr>
          <td contenteditable="true">hello</td>
          <td contenteditable="true">This is hello column</td>
          <td contenteditable="true">
            <select class="type_inp" id="" name="type_inp">
              <option value="1">Character</option>
              <option value="2">Combobox List</option>
              <option value="3">Numeric</option>
              <option value="4">Date</option>
              <option value="5">Computed Column</option>
            </select>
          </td>
          <td contenteditable="true">10</td>
          <td contenteditable="true">20</td>
          <td contenteditable="true">
            <select class="manedit" name="manedit">
              <option value="1">YES</option>
              <option value="2">NO</option>
            </select>
          </td>
          <td contenteditable="true">
            <select class="massudt" name="massudt">
              <option value="1">YES</option>
              <option value="2">NO</option>
            </select>
          </td>
          <td>
            <span class="table-remove glyphicon glyphicon-remove"></span>
          </td>
        </tr>
        <!-- This is our clonable table line -->
        <tr class="hide">
          <td contenteditable="true">hello</td>
          <td contenteditable="true">This is hello column</td>
          <td contenteditable="true">
            <select class="type_inp" id="" name="type_inp">
              <option value="1">Character</option>
              <option value="2">Combobox List</option>
              <option value="3">Numeric</option>
              <option value="4">Date</option>
              <option value="5">Computed Column</option>
            </select>
          </td>
          <td contenteditable="true">10</td>
          <td contenteditable="true">20</td>
          <td contenteditable="true">
            <select class="manedit" name="manedit">
              <option value="1">YES</option>
              <option value="2">NO</option>
            </select>
          </td>
          <td contenteditable="true">
            <select class="massudt" name="massudt">
              <option value="1">YES</option>
              <option value="2">NO</option>
            </select>
          </td>
          <td>
            <span class="table-remove glyphicon glyphicon-remove"></span>
          </td>
        </tr>
      </table>
    </div>
    
    <button id="export-btn" class="btn btn-primary">Create Column(s)</button>
    <p id="export"></p>
  </div>
    

  <div class="container sub-container">
    
    <div id="table2" class="table-editable">
      <span class="table-add2 glyphicon glyphicon-plus"></span>
      <table class="table">
        <tr>
          <th>Column Name</th>
          <th>Value Code</th>
          <th>Value Description</th>
          <th></th>
        </tr>
        <tr>
          <td contenteditable="true">name</td>
          <td contenteditable="true">code</td>
          <td contenteditable="true">description</td>
          <td>
            <span class="table-remove glyphicon glyphicon-remove"></span>
          </td>
        </tr>
        <!-- This is our clonable table line -->
        <tr class="hide">
          <td contenteditable="true">name</td>
          <td contenteditable="true">code</td>
          <td contenteditable="true">description</td>
          <td>
            <span class="table-remove glyphicon glyphicon-remove"></span>
          </td>
        </tr>
      </table>
    </div>
  </div>

  <div class="container sub-container">
    
    <div id="table3" class="table-editable">
      <span class="table-add3 glyphicon glyphicon-plus"></span>
      <table class="table">
        <tr>
          <th>Column Name</th>
          <th>Formula</th>
          <th></th>
        </tr>
        <tr>
          <td contenteditable="true">name</td>
          <td contenteditable="true">columnname1 + columnname2</td>
          <td>
            <span class="table-remove glyphicon glyphicon-remove"></span>
          </td>
        </tr>
        <!-- This is our clonable table line -->
        <tr class="hide">
          <td contenteditable="true">name</td>
          <td contenteditable="true">columnname1 + columnname2</td>
          <td>
            <span class="table-remove glyphicon glyphicon-remove"></span>
          </td>
        </tr>
      </table>
    </div>
  </div>
    <new-customcol></new-customcol>
</div>
</section>
@endsection




