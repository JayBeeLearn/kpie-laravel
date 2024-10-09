@extends('welcome')

@section('content')

<div class="register_background">
    <div class="register_section">
        <div class="nav">
            <div class="logo">
                <img src="../images/logo.svg" alt="logo">
            </div>
            <div class="login">
                <p>Already have an account? <a href="/login">Login</a></p>
            </div>
        </div>

        <h2 class="title">Register New Account</h2>
       <div class="register_box">
            <div class="register">
                <form action={{ route('register.store') }} method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username <span class="red">*</span></label>
                        <input class="input" type="text" name="username" id="username" 
                        
                        >
                         @error('username')
                            <p class="text-dange" style="color: red">{{ $message }}</p>
                         @enderror
                    </div>

                     <div class="form-group">
                        <label for="email">Email <span class="red">*</span></label>
                        <input class="input" type="email" name="email" id="email" 
                        
                        >
                        @error('email')
                            <p class="text-dange" style="color: red">{{ $message }}</p>
                         @enderror

                    </div>

                    <div class="form-group">
                        <label for="password">Password <span class="red">*</span></label>
                        <input class="input" type="password" name="password" id="password" 
                        
                        >
                         @error('password')
                            <p class="text-dange" style="color: red">{{ $message }}</p>
                         @enderror

                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Password Confirm <span class="red">*</span></label>
                        <input class="input" type="password" name="password_confirmation" id="password_confirmation" 
                        
                        >
                         @error('password_confirmation')
                            <p class="text-dange" style="color: red">{{ $message }}</p>
                         @enderror

                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Register" class="button" >
                    </div>
                </form>
                <hr>
                <div class="login">
                   <p>Already have an account? <a href="/login">Login</a></p> 
                </div>
                
            </div>
       </div>
       <p class="text-center">Regulated activities are carried out on behalf of the Capital International Group by its licensed member companies. Full details can be viewed <span class="gold">here</span>.</p>
    </div>

</div>

@endsection