<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <div>
       
        @foreach ($phondata as $item)
        <p>{{ $item->name }}</p>
        <p>{{ $item['phone']['model']}}</p>
        @endforeach
   </div>
   <div>
       <h3>Inverse data</h3>
       @foreach ($user_data as $data)
           <p>{{ $data->model }}</p>
           <p>{{ $data->user->name }}</p>
           <p></p>
       @endforeach
   </div>
   <div>
       <h3>One to May</h3>
       @foreach ($post_data as $item)
           <p>{{ $item->post_name }}</p>
           @foreach ($item->comment as $comm)
               <p>{{ $comm->comments }}</p>
           @endforeach
       @endforeach
   </div>

   <div>
       <h3>One to may inverse</h3>
       @foreach ($comment_data as $item)
           <p>{{ $item->comments }}</p>
           <p>{{ $item->post->post_name }}</p>
       @endforeach
   </div>
 
</body>
</html>