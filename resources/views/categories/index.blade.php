@extends('backend.layout')

@section('content')
        <div class="row mt-3">
            <div class="col-sm-12 col-md-8">
            <h2>Category</h2>
        </div>
            <div class="col-sm-12 col-md-4">
            <a href="{{ route('categories.create') }}" class="btn btn-primary float-end">Add Category</a>
            </div>
        </div>
        <div class="table-responsive">
        <table class="table">
            <thead class="bg-dark text-light">
              <tr>
                <th class="col-lg-4" scope="col">Nama</th>
                <th scope="col">Gambar</th>
                <th class="col-lg-2" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
            <tr>
                  <th scope="row">{{ $category ->nama}}</th>
                  <td>
                    <img src="{{ asset('uploads/' .
                    $category->gambar) }}" alt="" width="150">
                    <td>
                    <form action="{{ route('categories.delete', ['id' => $category->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    <a href="{{ route('categories.edit', ['id' =>$category->id])}}" class="btn btn-success">Edit</a>
                    </form>
                    </form>
                    </td>
                </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
@endsection


