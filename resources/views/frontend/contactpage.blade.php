@extends('frontend.layouts.app')

@section('title', 'Contact Page')

@section('content')

    <div class="main-content py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="" method="post">
                            <div>
                                <label for="name" class="form-label">Enter Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Name">
                            </div>
                            <div>
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                            </div>
                            <div>
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="text" class="form-control" id="mobile" placeholder="Mobile">
                            </div>
                            <div>
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success mt-3">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <aside>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.1142219294957!2d89.19735531433702!3d23.166030916765802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x41dfa06c6d6a29d1!2zMjPCsDA5JzU3LjciTiA4OcKwMTEnNTguNCJF!5e0!3m2!1sen!2sbd!4v1651900876550!5m2!1sen!2sbd"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </aside>
                </div>
            </div>
        </div>
    </div>

@endsection
