<x-layout>
  <div class="tornaIndietro" style="">
    <a href="http://">
        <i class="fa-solid fa-arrow-left fa-2x"></i>
    </a>
</div>
<div class="container mb-5">
  <div class="row">
  <div class="col-12">
    <h1 class="text-center mt-5">Registrati</h1>
  </div>
  <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
  
    <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
        aria-labelledby="nav-ContactForm-tab">
        <form method="POST" action="{{route('register')}}"class="custom-form contact-form mb-5 mb-lg-0">
  @csrf
  
            <div class="contact-form-body">
  
                <div class="row">
  
                    <div class="col-12">
  
  
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Email" >
  
  
                    </div>
                    <div class="col-12">
  
  
                      <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="namelHelp" placeholder="Nome" >
          
          
                      </div>
  
                    <div class="col-12">
  
  
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
  
                    </div>

              <div class="col-12">
  
  
              <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword2" placeholder="Conferma Password" >
  
  
        </div>
  
                </div>
  
                <div class="col-lg-4 col-md-10 col-8 mx-auto">
                    <button type="submit" class="form-control">Registrati</button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
</div>


</x-layout>

