@extends('layouts.business')

@section('business')
    <div class="profile">
        <div class="top">
            <div class="history">
                <div>
                    
                    <p class="text-danger">-203.58$ <br><small>Last Transaction</small></p>

                </div>
                <div class="center">
                    
                    <p class=" "> <span class="text-bold text-success">3416.65$ <br></span> <small>Balance</small></p>
                </div>
                <div>
                    
                    <p class="text-success">+17% <br> <small>Interest in last quarter</small></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="down flex-box">
            <div class="username">
                    <div class="login">
                        <h2>Change Username</h2>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="username">Username <span class="red">*</span></label>
                            <input type="text" name="username" id="username" value="{{ Auth::user()->username}}">
                            {{-- <div class="text-danger"><?= $errors['user'] ?? '' ?></div> --}}

                        </div>

                    

                        <div class="form-group">
                            <button type="submit">Change Username </button>
                        </div>
                    </form>
                    <hr>
                    
                </div>
            </div>
            <div class="hr"> 

            </div>
            

            <div class="password">
                    <div class="login">
                    <form action="" method="POST">
                    

                        <div class="form-group">
                            <label for="old_password">Old Password <span class="red">*</span></label>
                            <input type="password" name="old_password" id="old_password">
                            {{-- <div class="text-danger"><?= $errors['pass'] ?? '' ?></div> --}}

                        </div>

                        <div class="form-group">
                            <label for="password">New Password <span class="red">*</span></label>
                            <input type="password" name="password" id="password">
                            {{-- <div class="text-danger"><?= $errors['pass'] ?? '' ?></div> --}}

                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password <span class="red">*</span></label>
                            <input type="password" name="password_confirmation" id="password_confirmation">
                            {{-- <div class="text-danger"><?= $errors['pass'] ?? '' ?></div> --}}

                        </div>

                        <div class="form-group">
                            <button type="submit">Change Password</button>
                        </div>
                    </form>
                    <hr>
                    
                    <div class="forgotten">
                        <a href="">Reset Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection