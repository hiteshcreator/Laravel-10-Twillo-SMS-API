<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        {{-- <link rel="stylesheet" href="css/main.css"> --}}
        <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    </head>
    <body>
      <div class="row">
    <div class="col-md-12" style="margin-top:5%">
      <form action="{{route('send-msg')}}" method="POST">
        @csrf
        <h1> Sending Message With Twillo </h1>
        @if(!empty($success))
        <h3 > {{ $success }}</h3>
        @endif

        <fieldset>
          <legend><span class="number">1</span> Your Basic Info</legend>
          <label for="name" style="margin-top:4%">Phone Number:</label>
          <input type="tel" maxlength="10" id="number" name="number" placeholder="Please Enter Your Number" required>
          <!-- Or add value and set default number -->
        </fieldset>
       
        <button type="submit">Send</button>
        
       </form>
        </div>
      </div>
      
    </body>
</html>
