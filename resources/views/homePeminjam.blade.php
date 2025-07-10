@extends('layouts.peminjamdefault')

@section('title', 'Dashboard Peminjam')

@section('content')
<div class="best-deals">
  <h2>Your Catalog</h2>
 
  <div class="deals1">
      <div class="deals-kiri">
        <div class="deals-elements">

          <div class="deal-texts">
            <h3>Motor 1</h3>
            <p>Start from</p>
            <div class="price-badge">IDR 750.000</div>
          </div>
          
          <div class="deal-icons">
            
          </div>
        </div>
        
      </div>
      <div class="deals-kanan">
          <div class="container-gambar">
            <img class="gambar-deals" src="gambar/motorbike.png" alt="">
          </div>
      </div>
  </div>
  <div class="deals1">
      <div class="deals-kiri">
        <div class="deals-elements">
          
          <div class="deal-texts">
            <h3>Motor 2</h3>
            <p>Start from</p>
            <div class="price-badge">IDR 750.000</div>
          </div>
          
          <div class="deal-icons">
            
          </div>
        </div>
        
      </div>
      <div class="deals-kanan">
          <div class="container-gambar">
            <img class="gambar-deals" src="gambar/motorbike.png" alt="">
          </div>
      </div>
  </div>
  <div class="deals1">
      <div class="deals-kiri">
        <div class="deals-elements">
          
          <div class="deal-texts">
            <h3>Motor 3</h3>
            <p>Start from</p>
            <div class="price-badge">IDR 750.000</div>
          </div>
          
          <div class="deal-icons">
            
          </div>
        </div>
        
      </div>
      <div class="deals-kanan">
          <div class="container-gambar">
            <img class="gambar-deals" src="gambar/motorbike.png" alt="">
          </div>
      </div>
  </div>



</div>

<div class="add-catalog">
  <div class="add-catalog-header">
      <div class="img-container">
          <img class="add-pic" src="gambar/addBike.png" alt="">
      </div>
  </div>
  <div class="add-catalog-body">
      <div class="add-button">
          <ion-icon name="add-circle-outline"></ion-icon>
      </div>
  </div>
</div>

<div class="store-rec">
  <div class="rec-header">
    <h3>Reviews</h3>
  </div>
  <div class="rec-body">
      <div class="review1">
          <h2>User123</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
             Quod dignissimos nobis totam natus iure sapiente vitae est officiis 
             asperiores ab? Fuga, officia quis sed iusto incidunt reiciendis facere? 
             Error, quas!
          </p>
      </div> 
      <div class="review1">
          <h2>User123</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
             Quod dignissimos nobis totam natus iure sapiente vitae est officiis 
             asperiores ab? Fuga, officia quis sed iusto incidunt reiciendis facere? 
             Error, quas!
          </p>
      </div>  
      <div class="review1">
          <h2>User123</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
             Quod dignissimos nobis totam natus iure sapiente vitae est officiis 
             asperiores ab? Fuga, officia quis sed iusto incidunt reiciendis facere? 
             Error, quas!
          </p>
      </div>            
  </div>
</div>
@endsection

       


            
            

            
   

</body>
</html>
