@extends('main', [
  "elementActive" => "contact"])
<!-- Contact -->
<section id="contact" data-bs-target="#navbar">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <form>
  <div class="mb-3">
    <label for="name" class="form-label ">Nama Lengkap</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="name" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label ">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="email" required>
  </div>
  <div class="mb-md-5">
    <label for="pesan" class="form-label ">Pesan</label>
    <input type="text" class="form-control" id="pesan" aria-describedby="pesan" required>  </div>
  <a class="btn btn-primary" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Backendnya masi belom ada, wait for updates later">Kirim</a>
</form>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ece0c3" fill-opacity="1" d="M0,64L48,90.7C96,117,192,171,288,165.3C384,160,480,96,576,69.3C672,43,768,53,864,96C960,139,1056,213,1152,213.3C1248,213,1344,139,1392,101.3L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <!-- css -->
    <style>
    section{
      paddingg-top: 5rem;
    }
    #contact{
      padding-top: 5rem;
        background-color: #ece0c3;
    }
    #footer{
    background-color: #9D9D9D
    }
        html{
            scroll-behavior: smooth;
        }
    </style>
