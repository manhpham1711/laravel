<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
       div{
           display: inline-block;
           border: 2px solid red;
           height: auto;
           width: auto;
           margin: 20px;
       }
       h1{
           padding-left: 5px;
       }
       .button {
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            }

            .button1 {
            background-color: white; 
            color: black; 
            border: 2px solid #4CAF50;
            }
        
            .button1:hover {
            background-color: #4CAF50;
            color: white;
            }
            .button2 {
                background-color: white; 
                color: black; 
                border: 2px solid #008CBA;
                }

            .button2:hover {
                background-color: #16db6b;
                color: white;
            }
        </style>
    </head>
    <body>
       <center><h1>Danh Sách Book</h1> </center>
       <form action="/book/add" method="POST"> 
        @csrf
        @method("DELETE")
        <button class="button button1" style="
    margin-left: 136px;" type = "submit" >Add </button></form>
       </form>
       <br>

        @foreach ($book as $books) 
           <div><h1> Name Book: {{$books->NameBook}} </h1>
           <h1> Price: {{$books->PriceBook}}  </h1>
           <h1> Book Publisher: {{$books->BookPublisher}}  </h1>
           <form action = '{{"/book/delete/".$books->BookID}} ' method = "POST">
            @csrf
            @method("DELETE")
            <center><button class="button button2" type = "submit">Delete </button></center></form>
           </div></hr>
        @endforeach
    

    </body>
</html>