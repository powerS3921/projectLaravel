<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
    <style type="text/css">
        .title_deg{
            text-align: center;
            font-size: 55px;
            font-weight: bold;
        }
        .table_deg{
            border: 2px solid white;
            width: 100%;
            margin: auto;
            padding-top: 50px;
            text-align: center;
            font-size: 20px;
        }
        .th_deg{
            background-color: green;
        }
        .tr_deg,.td_deg{
            border: 1px solid white
        }
        .img_deg{
            width: 100px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
      @include('admin.header');
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="title_deg">All orders</h1>
                <table class="table_deg">
                    <tr class="th_deg">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product_title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Order status</th>
                        <th>Image</th>
                        <th>Accept</th>
                    </tr>
                    @foreach($order as $order)
                    <tr class="tr_deg">
                        <td class="td_deg">{{$order->name}}</td>
                        <td class="td_deg">{{$order->email}}</td>
                        <td class="td_deg">{{$order->address}}</td>
                        <td class="td_deg">{{$order->phone}}</td>
                        <td class="td_deg">{{$order->product_title}}</td>
                        <td class="td_deg">{{$order->quantity}}</td>
                        <td class="td_deg">{{$order->price}}</td>
                        <td class="td_deg">{{$order->payment_status}}</td>
                        <td class="td_deg"><img src="/product/{{$order->image}}" class="img_deg"></td>
                        <td class="td_deg">
                            @if($order->payment_status=='processing')
                            <a href="{{url('accept', $order->id)}}" class="btn btn-primary">Accept</a>

                            @else
                            <p style="color: green">Accepted</p>

                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>