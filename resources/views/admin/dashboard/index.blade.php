@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>

  <div class="section-body">
    <h1 class="text-center">Welcome {{ Auth::user()->name }}!</h1>
  </div>


    <div class="card-body p-0">
        <div class="table-responsive table-invoice">
            <table class="table table-striped">
                <tbody>
                    <tr>
                    @for ($i = 0; $i < count($reportdata); $i++)
                        <th>{{ $reportdata[$i]->name }}</th>
                    @endfor
                    </tr>
                    <tr>
                        
                    </tr>
                </tbody>
            </table>
          </div>
    </div>
</section>
@endsection
