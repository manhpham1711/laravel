<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Add Book</h1></center>
    <form action="/book/add/new" method="post">
    @csrf 
    @method("DELETE")
        Name Book
        <input type="text" id="id" name="name"><br>
        Price Book
        <input type="number" id="titleForm" name="price"><br>
        Book Publisher
        <input type="text" id="descriptionForm" name="author"><br><br>
        <input type="submit" value="Submit">

    </form>
</body>

</html> -->

<!DOCTYPE html>
<html>
    <head>
        <title>add book</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style >
        *{
    padding: 0px;
    margin: 0px;
    font-family: sans-serif;
    box-sizing: border-box;
}
    .container{
        width: 100%;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }

main{
    background-color: #dddddd;
    min-height: 300px;
    padding: 7.5px 15px;
}
h1{
    color: #009999;
    font-size: 20px;
    margin-bottom: 30px;
}
.register-form{
    width: 100%;
    max-width: 400px;
    margin: 20px auto;
    background-color: #ffffff;
    padding: 15px;
    border: 2px dotted #cccccc;
    border-radius: 10px;
}

.input-box{
    margin-bottom: 10px;
}
.input-box input[type='text'],
.input-box input[type='date']{
    padding: 7.5px 15px;
    width: 100%;
    border: 1px solid #cccccc;
    outline: none;
    font-size: 16px;
    display: inline-block;
    height: 40px;
    color: #666666;
}
.btn-box{
    text-align: right;
    margin-top: 30px;
}
.btn-box button{
    padding: 7.5px 15px;
    border-radius: 2px;
    background-color: #009999;
    color: #ffffff;
    border: none;
    outline: none;
}

</style>
    </head>
    <body>
        <main>
            <div class="container">
                <div class="register-form">
                    <form action="/book/add/new" method="post">
                    @csrf 
                    @method("DELETE")
                        <h1>Add Book</h1>
                        <div class="input-box">
                            Name Book
                            <input type="text" placeholder="Name Book" name="name">
                        </div>
                        <hr>
                        <br>
                        <div class="input-box">
                            Price Book
                            <input type="number" placeholder="Price Book" name="price">
                        </div>
                        <hr>
                        <br>
                        <div class="input-box">
                            Book Publisher
                            <input type="text" placeholder="Book Publisher" name="author">
                        </div>
                        <hr>
                        <br>
                        <div class="btn-box">
                            <button type="submit">
                               Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>