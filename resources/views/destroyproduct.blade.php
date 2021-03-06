<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>View Products | Product Store</title>
    <!-- Styles etc. -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1>Here's a list of available products</h1>
        <table>
            <thead>
            <td>id</td>
            <td>Name</td>
            <td>Description</td>
            <td>Count</td>
            <td>Price</td>
            </thead>
            <tbody>
            @foreach ($allProducts as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td class="inner-table">{{ $product->description }}</td>
                    <td class="inner-table">{{ $product->count }}</td>
                    <td class="inner-table">{{ $product->price }}</td>
                   <td> <a href = '/products/delete/{{ $product->id }}'>Delete</a></td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>