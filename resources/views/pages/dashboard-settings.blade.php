@extends('layouts.dashboard')

@section('title')
    Store Settings    
@endsection

@section('content')

        <!-- section content -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">Store Settings</h2>
              <p class="dashboard-subtitle">
                Make store that profitable
              </p>
            </div>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-12">
                <form action="{{route('dashboard-settings-redirect', 'dashboard-settings-store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Nama Toko</label>
                              <input type="text" name="store_name" class="form-control" value="{{$user->store_name}}" v-model="name" autofocus />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Kategori</label>
                              <select name="categories_id" class="form-control">
                                <option value="{{$user->categories_id}}">Tidak diganti</option>
                                    @foreach ( $categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Store</label>
                              <p class="text-muted">Apakah anda juga ingin membuka toko?</p>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="store_status" id="openStoreTrue" class="custom-control-input" value="1" {{$user->store_status == 1 ? 'checked' : ''}}>
                                <label for="openStoreTrue" class="custom-control-label">Buka Toko</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="is_store_open" id="openStoreFalse"
                                  class="custom-control-input" value="0" {{$user->store_status == 0 || $user->store_status == NULL ? 'checked' : ''}}>
                                <label for="openStoreFalse" class="custom-control-label">Tutup Sementara</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col text-right">
                            <button type="submit" class="btn btn-success px-5">Save Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection