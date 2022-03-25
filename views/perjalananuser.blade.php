@extends('main')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Data Perjalanan User</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr>
                  <th class="text-center">
                    #
                  </th>
                  <th>Nama Lengkap</th>
                  <th>Lokasi</th>
                  <th>Suhu</th>
                  <th>Tanggal</th>
                  <th>Jam</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    1
                  </td>
                  <td>Febrian Yudhistira  </td>
                  <td>2018-01-20</td>
                  <td>Febrian Yudhistira</td>
                    <td>2018-01-20</td>
                    <td>2018-01-20</td>
                  <td><a href="#" class="btn btn-secondary">Edit</a> <a href="#" class="btn btn-secondary">Hapus</a></td>
                </tr>
                <tr>
                    <td>
                      1
                    </td>
                    <td>Febrian Yudhistira</td>
                    <td>2018-01-20</td>
                    <td>Febrian Yudhistira</td>
                    <td>2018-01-20</td>
                    <td>2018-01-20</td>
                    <td><a href="#" class="btn btn-secondary">Edit</a> <a href="#" class="btn btn-secondary">Hapus</a></td>
                  </tr>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>Febrian Yudhistira</td>
                    <td>2018-01-20</td>
                    <td>Febrian Yudhistira</td>
                    <td>2018-01-20</td>
                    <td>2018-01-20</td>
                    <td><a href="#" class="btn btn-secondary">Edit</a> <a href="#" class="btn btn-secondary">Hapus</a></td>
                  </tr>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>Febrian Yudhistira</td>
                    <td>2018-01-20</td>
                    <td>Febrian Yudhistira</td>
                    <td>2018-01-20</td>
                    <td>2018-01-20</td>
                    <td><a href="#" class="btn btn-secondary">Edit</a> <a href="#" class="btn btn-secondary">Hapus</a></td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
