
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
75
76
77
78
79
80
81
82
83
84
85
86
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Encryption and Decryption User Data using Crypt class in Laravel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    h2.title {
        background: #104880;
        padding: 10px;
        text-align: center;
        color: #fff;
        border-radius: 5px;
        border-bottom: solid 7px #112233;
    }
    .my-form {
        border: solid 1px #123;
        padding: 30px;
        border-radius: 5px;
    }
    li.error {
        color: #e60e0e;
        font-weight: 600;
        list-style: none;
    }
    .has-error .form-control {
        border-color: #e41814;
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="title">Encryption and Decryption User Data using Crypt class in Laravel</h2>

  <div class="row">
    <div class="col-md-4 my-form">

        <ul>
 @foreach($errors->all() as $error)
 <li class="error">{{ $error }}</li>
 @endforeach
 </ul>


    <form action="{{ url('tests') }}" method="post">
        @csrf
        <div class="form-group {{ $errors->has('card_name') ? 'has-error' : '' }}">
            <label for="card_name">Name on Card:</label>
            <input type="text" class="form-control" name="card_name" id="card_name" value="{{ old('card_name') }}">
        </div>
        <div class="form-group {{ $errors->has('card_no') ? 'has-error' : '' }}" >
            <label for="card_no">Card Number:</label>
            <input type="text" class="form-control" name="card_no" id="card_no" value="{{ old('card_no') }}">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group {{ ($errors->has('exp_month') || $errors->has('exp_month')) ? 'has-error' : '' }}">
                    <label for="Expiration">Exp. Month/Yeay:</label>
                    <div class="row">
                        <div class="col-md-6" style=" padding-right: 5px; "><input type="text" class="form-control" name="exp_month" id="exp_month" value="{{ old('exp_month') }}"></div>
                        <div class="col-md-6" style=" padding-left: 5px; "><input type="text" class="form-control" name="exp_year" id="exp_year" value="{{ old('exp_year') }}"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('cvv') ? 'has-error' : '' }}">
                    <label for="cvv">CVV:</label>
                    <input type="text" class="form-control" name="cvv" id="cvv" value="{{ old('cvv') }}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>

  </div>
</div>

</body>
</html>
