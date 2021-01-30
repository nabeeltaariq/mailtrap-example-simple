<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <h3>without any style</h3>
 <form style="display:flex;flex-direction:column;align-items:center" method="post" action='/contactus'>
  @csrf
  <div>
   <label for="name">Name</label>
   <input type="text" id="name" name="name" placeholder="Your name..">
   <h4>{{$errors->first("name")}}</h4>
  </div>


  <div>
   <label for="email">Email</label>
   <input type="email" id="email" name="email" placeholder="Email ....">
   <h4>{{$errors->first("email")}}</h4>
  </div>
  <div>
   <label for="Message">Message</label>
   <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
   <h4>{{$errors->first("message")}}</h4>

  </div>


  <input type="submit" value="Submit">

 </form>

</body>

</html>