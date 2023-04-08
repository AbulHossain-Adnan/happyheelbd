<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Happy Heel's</title>
  </head>
  <body>


    <div class="row">
  <div class="col-sm-6">
   
     <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
               {{-- <span>Sender Info:</span> <br> --}}

               <span>Happy Heel's</span> <br>
                    <span>Phone: 01771915770</span> <br>
                    <span>Email: happyheels2020@gmail.com</span> <br>

                   
                    <span>Address: Kamrangirchar Purbo Rasulpur, Rony Market,
                       3 number goli, 1211 Dhaka, Bangladesh</span> <br>
           
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
              {{-- <span>Reciever Info:</span> <br> --}}
               <span>Invoice Id: #{{$orders->id}}</span> <br>
                    <span>Name:  {{$orders->name}}</span> <br>
                    <span>Email:  {{$orders->email}}</span> <br>
                    <span>Phone:  {{$orders->pnumber}}</span> <br>
                    <span>Address: {{$orders->Shipping->district}},  {{$orders->Shipping->area}},  {{$orders->Shipping->division}} </span> <br>
            </div>
            </div>
        </div>
    </div>

    <div class="card ">

  <div class="">
    <div class="card-header text-white bg-primary"><h3>Order items:</h3></div>
     <div class="row">
        <div class="col-sm-12">
            <div class="">
            <div class="">
               <table class="table">
                <thead>
                    <tr>
                     
                    <th class="wd-15p">SLN</th>
                    <th class="wd-15p">Name</th>
                    <th class="wd-15p">Image</th>


                {{-- <th class="wd-15p">product code</th> --}}
             
                {{-- <th class="wd-20p">color</th> --}}
                <th class="wd-15p">Size</th>
                <th class="wd-10p">QTY</th>
                <th class="wd-10p">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($order_details as $key=>$item)
              <tr>

               
              		<td>{{$key+1}}</td>
                      <td>{{$item->product->product_name}}</td>
              		<td>
              			<img src="{{asset('product_images/'.@$item->product_image)}}" class="rounded-circle" alt="Cinque Terre" width="50" height="50" >
              		</td>

              		{{-- <td>{{$item->product->product_code}}</td> --}}
              		{{-- <td>{{$item->color}}</td> --}}

              		<td>{{$item->size}}</td>
              		{{-- <td>{{$item->price}}</td> --}}

              		<td>{{$item->quantity}}</td>
              		<td>{{$item->subtotal}}</td>
    
              </tr>

          
          
             @endforeach
               {{-- {{$orders}} --}}
                     <tr>
                <td colspan="5" class="total-heading"> Shipping charge:</td>
                <td colspan="4" class="total-heading"> TK {{$orders->shipping}}</td>
            </tr>
             {{-- <tr>
                <td colspan="5" class="total-heading"> Advance:</td>
                <td colspan="4" class="total-heading"> tk 0</td>
            </tr> --}}
             <tr>
                <td colspan="5" class="total-heading"><h2> Amount - <small> Total:</small> :</h2></td>
                <td colspan="4" class="total-heading"><h4>TK {{$orders->paying_amount}}</h4></td>
            </tr>
                </tbody>
                </table>
                 <br>
    {{-- <p class="text-center">
        Thank your for shopping with Happy Heel's
    </p> --}}
            </div>
            </div>
        </div>
      
    </div>
  </div>
</div>
  
  </div>
  </div>




















   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
