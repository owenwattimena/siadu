{{-- Modal Style --}}
<link rel="stylesheet" href="{{asset('assets/app-css/modal.css')}}">

{{-- Component Modal --}}
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                @method('post')
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Tambah User</h4>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="[Nama]" required>
                                @error('name')
                                    <span class="text-red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="[Email]" required>
                                @error('email')
                                    <span class="text-red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" placeholder="[Username]" required>
                                @error('username')
                                    <span class="text-red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="[Password]" required>
                                @error('password')
                                    <span class="text-red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="[Konfirmasi Password]" required>
                            </div>
                            <div class="form-group">
                                <label for="level">Level</label>
                                <select class="form-control" id="level" name="level" placeholder="[Konfirmasi Password]" required>
                                    @foreach ($roles as $key => $item)                                        
                                    <option value="{{ $key }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                                @error('level')
                                    <span class="text-red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->