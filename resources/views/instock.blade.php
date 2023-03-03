@extends('dashboard')
  
@section('content')

<style>

    /* Table Style */

    .table {
        width: 90%;
        border-collapse: collapse;
        border-spacing: 0 30px;
        border: 1px solid black;
        background: #D6D3D4;    
    }

    .table-head{
        background: #D6D3D4;
    }

    .table-responsive{
        height: 400px;
        overflow-y: scroll;
    }

    th {
        text-align: center;
        border-collapse: collapse;
        border: 1px solid;
        border-color: black;
        height: 50px;
        
    }

    td {
        text-align: center;
        border-collapse: collapse;
        border: 1px solid;
        border-color: black;
        height: 40px;
    }

    .button{
        display: inline-block;
        outline: 0;
        border: 0;
        cursor: pointer;
        font-weight: 600;
        color: rgb(72, 76, 122);
        font-size: 14px;
        height: 38px;
        padding: 8px 24px;
        border-radius: 50px;
        transition: all .2s ease-out;
            
    }

    .button:hover{
        box-shadow: 0 8px 22px 0 rgb(37 44 97 / 15%), 0 4px 6px 0 rgb(93 100 148 / 20%);
    }



    /* Page Header */
    
    .text {
        position: absolute;
        left: -20px;
        top: -20px;
        background: #CDC0C2;
        opacity: 75%;
        height: 11%;
        padding: 1.5%;
        width: 100%;
        box-shadow: 0px 1px gray;
    }

    /* Table Box Style */

    .t-box {
        background: #CDC0C2;
        opacity: 75%;
        position: absolute;
        margin: auto;
        width: 85%;
        padding: 30px;
        top: 20%;
        left: 8%;
        border-radius: 15px;
        border: 1px solid black;
    }

    .t-header {
        box-shadow: 0px 1px gray;
        flex-direction: row;
        display: flex;
    }

    .title {
        padding-bottom: 10px;
    }

    .add-prod {
        background: black;
        color: white;
        font-style: arial;
        font-weight: 500;
        font-size: 20px;
        height: 30px;
        margin-left: 10px;
        width: 30px;
        border: 1px solid white;
        margin-top: 2px;
    }

    
</style>

<script>

    $ = function(id) {
            return document.getElementById(id);
        }

        var show = function(id, event) {
            $(id).style.display ='block';
            event.preventDefault();
        }
        var hide = function(id) {
            $(id).style.display ='none';
        }

</script>

<section class="home-section">
      <div class="text">
        <h4>Lim's Sari-Sari Store Monitoring System</h4>
    </div>

      <br>
      <br>
      <br>

      <div class="container-fluid page-body-wrapper">
            <div class="container t-box" align = "left">
            <div class=t-header>
                <h1 class="title">
                    IN STOCK
                </h1>
                
            </div>

<br>

      <div class="table-responsive" align = "center">
                            <table class="table">
                                <thead class="table-head">
                                    <tr>
                                        <th>Product Number</th>
                                        <th>Product Code</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>In Stock</th>
                                        <th>Add Stock</th>
                                        <th>Sell</th>
                                        <th>Out of Stock?</th>
                                </thead>
                                </thead>
                                <tbody classname="table-body">
                                @foreach($products as $item)
                                    <tr>
                                        
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->code }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td> 
                                            <a href = "addstock/{{$item->id}}" class="button">+</a> 
                                            
                                        </td>
                                        <td> <a href = "sold/{{$item->id}}" class="button">-</a> </td>
                                        <td> <a href = "#" class="button">Delete</a> </td>

                                    </tr>
                                @endforeach

                                
                                </tbody>
                            </table>
                        </div>
</section>

@endsection