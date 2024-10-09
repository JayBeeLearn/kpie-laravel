@extends('layouts.business')

@section('business')
    <div class="container">
            @if ($message = Session::get('success'))
                <div class="container alert alert-success">
                    <h5>{{ $message }}</h5>
                </div>
            @endif
            
        </div>
    <div class="hero">
    <h1 class="text-center"> {{ Auth::user()->username }}, welcome today!!</h1>

    <h2 cla>What do you want to do?</h2>

    <h4>Initiate a transaction or make changes to your profile now</h4>
        

    <div class="hero">
            <div class="row">
                <a href="#" class="platform">
                        <h4>Your Last Appointment</h4>
                        <table>
                            <tr>
                                <td>With:</td>
                                <td class="text-bold">Our Regional Manager</td>
                            </tr>

                            <tr>
                                <td>Date:</td>
                                <td class="text-bold">Monday 7th October, 2024</td>
                            </tr>

                            <tr>
                                <td>Time:</td>
                                <td class="text-bold">14:00 EST</td>
                            </tr>
                        </table>
                        <button class="more">Learn more</button>
                </a>

                
                <a href="#" class="banking">
                        <h4>Account History</h4>
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
                         <button class="more">View more history</button>
                </a>
            </div>
        </div>
    </div>
@endsection