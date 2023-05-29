<h1 class="headerBeforeSection">Oferta</h1>
        
        <section class="offer sectionColor">
            <div class="switchPrice">
                <select name="priceSwitch" id="priceSwitch">
                    <option value="PLN">PLN</option>
                    <option value="USD">USD</option>
                    <option value="GBP">GBP</option>
                    <option value="EUR">EUR</option>
                </select>
            </div>
            @foreach($product as $product)
            <div class="card">
                <img src="product/{{$product->image}}">
                <h2 class="h2Card">{{$product->title}}</h2>
                <p class="price"><span class="productPrice" data-price="{{$product->price}}">{{$product->price}}</span>{{$product->description}}</p>
                <form action="{{url('add_cart',$product->id)}}" method="POST" class="offerForm">
                    @csrf
                    <div class="row">
                        <div>
                            <input type="number" name="quantity" value="1" min="1">
                        </div>
                        <div>
                            <input type="submit" value="Dodaj do koszyka" class="buttonCard">
                        </div>
                        
                    </div>
                    
                </form>
               
            </div>
            @endforeach
        </section>