@extends('main')

@section('content')
<div>
    <div    >
      <div class="card">
        <div class="card-header">
          <h4>Tambah User</h4>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label>NIK</label>
            <input type="number" class="form-control">
          </div>
          <div class="form-group">
            <label>Nama Lengkap</label>
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <input type="text" class="form-control phone-number">
            </div>
          </div>
          <div class="form-group">
            <label>Email</label>
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <input type="email" class="form-control phone-number">
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <input type="password" class="form-control phone-number">
            </div>
          </div>
          <button class="btn btn-secondary">Tambah+</button>
        </div>
      </div>
@endsection
