@extends('layouts.default')

@section('content')
    <div class="container">
        <h2>What is Laracarte?</h2>
        Laracarte is a clone app of  <a href="//laramap.com">laramap.com</a>

        <div class="row">
            <div class="col-md-6">
              <p class="alert alert-warning"> <i class="fa fa-exclamation-triangle" ariahidden="true">
                  </i> This app has been built by <a href="https://twitter.com/LefurtifKevin">le furtif</a> 
              for learning purposes.</p>
            </div>
                
                
        </div>
                 <p>Feel free to help to improve the <a href="#">source code</a>.</p>
                 <hr>
                 <h2>What is Laramap?</h2>
                 <p>Laramap is the website by which Laracarte was inspired :). <br>
                 More info <a href="//laramap.com">here</a>.</p>
                 <hr>
                 <h2>Which tools and services are used in Laracarte?</h2>
                 <p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.</p>
                 <ul>
                     <li>laravel</li>
                     <li>bootstrap</li>
                     <li>amazone s3</li>
                     <li>mandrill</li>
                     <li>gravatar</li>
                     <li>hereku</li>
                     <li>google map</li>
                     <li>Anthony Martin's geolocalisation package</li>
                     <li>Michel Fortin's Markdown Parser Package</li>
                     
                 </ul>
    </div>
@endsection