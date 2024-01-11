@extends('layouts.backend.master')
@section('title')
    Daftar User
@endsection

@section('content')
    
        
    <div class="row">
        <div class="col-12">
            <div class="card">
                
                
                    </form>
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Role</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-bold-500">{{ $user->role }}</td>
                                        <td class="text-bold-500">{{ $user->name }}</td>
                                        <td class="text-bold-500">{{ $user->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
