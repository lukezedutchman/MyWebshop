<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{asset('../css/all.css')}}"/>
        <title>Document</title>
    </head>
    <body>
        <div class="nav">
            @include('../require/navbar')
        </div>

        <div class="container">
            <form action="{{'store'}}" method="post">
                @csrf
                <div class="input-icecream-details-row1">
                    <select name="select-category">
                        <option value="0" disabled selected>Select Category</option>
                        <option value="1">Hard Ice Cream</option>
                        <option value="2">French Ice Cream</option>
                        <option value="3">Soft Ice Cream</option>
                        <option value="4">Light Ice Cream</option>
                        <option value="5">Reduced Fat Ice Cream</option>
                        <option value="6">Fat-Free Frozen Dairy Dessert</option>
                        <option value="7">No Sugar Added Ice Cream or Frozen Dairy Dessert</option>
                        <option value="8">Lactose-free Ice Cream</option>
                        <option value="9">Gluten-Free Ice Cream</option>
                        <option value="10">Organic Ice Cream</option>
                        <option value="11">Italian-Style Gelato</option>
                    </select>
                    <input type="text" name="Product_Name" placeholder="Product Name">
                    <input type="number" name="Price" placeholder="Price">
                    <input type="number" name="Quantity" placeholder="Quantity">
                </div>
                <div class="input-client-details-row2">
                    <textarea name="Description" id="" placeholder="Description"></textarea>
                </div>

                <input type="submit" value="save">
            </form>
        </div>

        <div class="footer">

        </div>
    </body>
</html>