<!doctype html>
<html>


<head>

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 3px solid #dddddd;
  text-align: left;
  padding: 2px;
}

tr:nth-child(even) {
  background-color: #FFFF00;
  text-align: left;
}

    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
    </head>
   
<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                      
                            
                            
          
          </td>
         
          <div class = "banner">
          <img class = "center" src = "https://drive.google.com/uc?id=1pku0TgpTDCvZYUoz0O6gXn_bTX45bW3R" width = "738" height = "265" shadow >
          </div>
            </div>
            <br>
            <br>    
           
            <table>
                <tr>
                    <th>Date</th>
                    <th>Title</th>
                    <th>KSRP Price(RM)</th>
                    <th>Region</th>
                </tr>
                <tr>
                    <td>{{ $date }}</td>
                    <td>{{ $title }}</td>
                    <td>{{ ($fee/100) }}</td>
                    <td>{{ $regions }}</td>
                </tr>
            </table>

          <div class="hero-text">
            <h1 style="font-family:'Courier New'"></h1>
            <p> Dear KSRP Members,</p>
            <p>We'd love you to join us in {{ $regions }}, {{ $date }}, for {{ $title }}</p>
            <div>
            <p>If you interested, please click on the link below</p>
             
              <a style="color:blue" class = ""
                href ="{{ route('event-public.show',[$id]) }}">Register Here<a/> 
           
             <!--
            <a style="color:blue" class = ""
                href ="{{ route('check.id',[$id]) }}">Register Here<a/> 
             -->
            </div>
            <br>
            <p>
            Looking forward to see you there,
            </p>
            <p>
            KSRP Sekretariat</p>
          </div>
        </div>

          </tr>
          </table>
          </td>
            </tr>
            
          
            
          
           
        </table>
    </div>

    
</body>
    

<script> document.write(new Date().toLocaleDateString()); </script>

</html>
