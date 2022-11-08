<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>{{__("Tagnipa|LGU Admin")}}</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/admin.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @livewireStyles
</head>

<body id="page-top">
    @livewire('admin')

    @livewireScripts
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    
    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
   
    <script>
        $(document).ready( function () {
    $('#dataTable').DataTable();
    } );
    $(document).ready(function (e) {
       
         
       $('#File').change(function(){
                 
         let reader = new FileReader();
      
         reader.onload = (e) => { 
      
         $('#preview-Photoimage-before-upload').attr('src', e.target.result); 
         }
      
         reader.readAsDataURL(this.files[0]); 
        
        });
 
        $('#Points').change(function(){
                 
                 let reader = new FileReader();
              
                 reader.onload = (e) => { 
              
                 $('#preview-pointsimage-before-upload').attr('src', e.target.result); 
                 }
              
                 reader.readAsDataURL(this.files[0]); 
                
                });
        $('#baylosbasura').change(function(){
                 
                 let reader = new FileReader();
              
                 reader.onload = (e) => { 
              
                 $('#preview-baylosbasuraimage-before-upload').attr('src', e.target.result); 
                 }
              
                 reader.readAsDataURL(this.files[0]); 
                
                });
        
     });
    </script>
   
    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/admin.min.js')}}"></script>



 

</body>

</html>