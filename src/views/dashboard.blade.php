<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('cardPage')}}" method="post">
        @csrf
        <input type="submit" value="Pay Amount $50">
    </form>

    <form action="{{url('subscriptionPage')}}" method="post">
        @csrf
        <input type="submit" value="Subscription page">
    </form>

    <form action="{{url('subscriptionindex')}}" method="post">
        @csrf
        <input type="submit" value="Show subscription">
    </form>
    <form action="{{url('refundtransaction')}}" method="post">
        @csrf
        <input type="submit" value="Refund Amount">
    </form>
</body>
</html>
