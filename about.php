<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tillana&display=swap" rel="stylesheet">
    <title>Alignment</title>
    <style>
        * {
            box-sizing: border-box ;
        }

        body {
            font-family: sans-serif;
            /* color: azure; */
            
        }

        .container {
            width: 1500px;
            margin: auto;
            border: 2px solid red;
            background-color: rgb(0, 0, 0);
            margin: 1px 2px;
            
        }

        .item {
            border: 3px solid rgb(153, 251, 8);
            margin: 12px 3px;
            padding: 12px 3px;
            background-color: rgb(255, 255, 255);

        }

        #fruits{
            float: left;
           width: 100%;
        }
        #fruits1{
            float: left;
           width: 100%;
           
           position: relative;
           padding-right: 460px;
           text-decoration: none;
           /* color: red; */
    
        }
        #fruits2{
            /* float: left; */
           width: 100%; 
           clear: left;
           /* padding-left: 100px; */
          
        }
        p,h3{
            text-align: justify;
        }
        h1{
            margin: auto;
            width: 375px;
            color: aliceblue;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to Rural Bank</h1>
        <div id="fruits" class="item">
            <h3>Regional Rural Banks</h3>
            <p id="fruitspara" class="para">
              <strong>  The Regional Rural Banks (RRBs) </strong> were established in 1975 under the provisions of the Ordinance promulgated on 26th September, 1975 and Regional Rural Banks Act, 1976 with a view to developing the rural economy by providing, for the purpose of development of agriculture, trade, commerce, industry and other productive activities in the rural areas, credit and other facilities, particularly to small and marginal farmers, agricultural labourers, artisans and small entrepreneurs, and for matters connected therewith and incidental thereto.
            <br>
            <br>
            As on 31.03.2022, SBI is having 14 sponsored RRBs with a network of 4725 branches spread across 217 districts.
        </p>
        </div>
        <h3 style="color: white; text-align:centre;">Other Banks in india</h3>
        <div id="fruits1" class="item">
            <h3 style="color: red;">Andhra Pradesh Grameena Vikas Bank</h3>
            <p id="fruitspara" class="para"><strong> Regional Rural Banks:</strong> Andhra Pradesh Grameena Vikas Bank
                Postal Address of Head Office:2-5-8/1 , Near Ambedkar Statue, Ramnagar, Hanmakonda, Warangal-506001, Telangana
                <strong>Website Address:</strong><a href="https://www.apgvbank.in/" target="_blank"> <strong> www.apgvbank.in </strong> </a>  </p>
        </div>
        <div id="fruits2" class="item">
            <h3 style="color: red;">Arunanchal Pradesh Rural Bank</h3>
            <p id="fruitspara" class="para"><strong> Regional Rural Banks: </strong> Meghalaya Rural Bank
                Postal Address of Head Office:MTC Building, 2 nd Floor, Shillong -793001, Meghalaya
            </strong>Website Address: <strong> <a href="https://www.cedgeinb.in/OnlineMGRB/"> <strong> www.meghalayaruralbank.co.in </strong> </a></p>
        </div>
    </div>
</body>

</html>