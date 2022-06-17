                               <div id="mycard">
                                 <div class='containere' style='text-align:left; border:2px dotted black;'>
                                            <div class='header'>
                                                
                                            </div>                                       
         
                                            <div class='containere-2'>
                                                  <div class='box-1'>
                                                 
                                                 
                                                  </div>
                                                  <div class='box-2'>
                                                      <h2>Nom & Prenom</h2>
                                                      <p style='font-size: 14px;'>Etudiant</p>
                                                  </div>
                                                  <div class='box-3 text-danger'>
                                                    <p>2022-2023</p>
                                                      
                                                  </div>
                                            </div>                                            
                                  
                                            <div class='containere-3'>
                                                  <div class='info-1'>
                                                      <div class='id'>
                                                          <h4>Matricule</h4>
                                                            @foreach ($etudiants as $etudiant )
                                                            <p>{{$etudiant->matricule}}</p>
                                                            @endforeach
                                                         
                                                      </div>
                                  
                                                      {{-- <div class='dob'>
                                                          <h4></h4>
                                                          <p>|phone</p>
                                                      </div> --}}
                                  
                                                  </div>
                                                  <div class='info-2'>
                                                      <div class='join-date'>
                                                          <h4>Cycle</h4>
                                                          <p>License</p>
                                                      </div>
                                                      {{-- <div class='expire-date'>
                                                          <h4>Expire Date</h4>
                                                          <p>|exp_date</p>
                                                      </div> --}}
                                                  </div>
                                                  <div class='info-3'>
                                                      <div class='email'>
                                                          <h4>Niveau</h4>
                                                          <p>License 1 </p>
                                                      </div>
                                                      
                                                  </div>
                                                  <div class='info-4'>
                                                      {{-- <div class='sign'>
                                                          <br>
                                                          <p style='font-size:12px;'>Your Signature</p>
                                                      </div> --}}
                                                  </div>
                                                  <!-- id card end -->
                                         </div>
                            </div>
                               
                               
                               </div>

                     <hr>
                    <div class=" btne">
                    
                     
                    <button id="demo" class="downloadtable btn btn-primary " onclick="downloadtable()"> Download Id Card</button>
                    <button  class=" btn btn-danger" wire:click="goToListStudent()"> Retourner a la liste des etudiants</button>
                    </div>


                         <style>

        body{
        font-family:'arial';
        }
        .btne{
            display:flex;
            justify-content:space-around;
        }

        .lavkush img {
        border-radius: 8px;
        border: 2px solid blue;
        }
        span{

            font-family: 'Orbitron', sans-serif;
            font-size:16px;
        }
        hr.new2 {
        border-top: 1px dashed black;
        width:350px;
        text-align:left;
        align-items:left;
        }
        /* second id card  */
        p{
            font-size: 13px;
            margin-top: -5px;
        }
        .containere {
            width: 80vh;
            height: 45vh;
            margin: auto;
            background-color: white;
            box-shadow: 0 1px 10px rgb(146 161 176 / 50%);
            overflow: hidden;
            border-radius: 10px;
        }

        .header {
            /* border: 2px solid black; */
            width: 73vh;
            height: 15vh;
            margin: 20px auto;
            background-color: white;
            /* box-shadow: 0 1px 10px rgb(146 161 176 / 50%); */
            /* border-radius: 10px; */
            background-image: url(images/entete.png);
            background-size:100% 100%;
            background-repeat: no-repeat;
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
        }

        .header h1 {
            color: rgb(27, 27, 49);
            text-align: right;
            margin-right: 20px;
            margin-top: 15px;
        }

        .header p {
            color: rgb(157, 51, 0);
            text-align: right;
            margin-right: 22px;
            margin-top: -10px;
        }

        .containere-2 {
            /* border: 2px solid red; */
            width: 73vh;
            height: 10vh;
            margin: 0px auto;
            margin-top: -20px;
            display: flex;
        }

        .box-1 {
            border: 4px solid black;
            width: 90px;
            height: 95px;
            margin: -40px 25px;
            border-radius: 3px;
        }

        .box-1 img {
            width: 82px;
            height: 87px;
        }

        .box-2 {
            /* border: 2px solid purple; */
            width: 30vh;
            height: 8vh;
            margin: 7px 0px;
            padding: 5px 7px 0px 0px;
            text-align: left;
            font-family: 'Poppins', sans-serif;
        }

        .box-2 h2 {
            font-size: 1.1rem;
            margin-top: -8px;
            color: rgb(27, 27, 49);
            ;
        }

        .box-2 p {
            font-size: 0.7rem;
            margin-top: -5px;
            color: rgb(179, 116, 0);
        }

        .box-3 {
            /* border: 2px solid rgb(21, 255, 0); */
            width: 16vh;
            height: 8vh;
            margin: 2px 0px 8px 25px;
        }

        .box-3 img {
            width: 8vh;
        }

        .containere-3 {
            /* border: 2px solid rgb(111, 2, 161); */
            width: 73vh;
            height: 12vh;
            margin: 0px auto;
            margin-top: 10px;
            display: flex;
            font-family: 'Shippori Antique B1', sans-serif;
            font-size: 0.7rem;
        }

        .info-1 {
            /* border: 1px solid rgb(255, 38, 0); */
            width: 17vh;
            height: 12vh;
            margin:15px 25px;
        }

        .id {
            /* border: 1px solid rgb(2, 92, 17); */
            width: 17vh;
            height: 5vh;
        }

        .id h4 {
            color: rgb(179, 116, 0);
            font-size:15px;
        }

        .dob {
            /* border: 1px solid rgb(0, 46, 105); */
            width: 17vh;
            height: 5vh;
            margin: 8px 0px 0px 0px;
        }

        .dob h4 {
            color: rgb(179, 116, 0);
            font-size:15px;
        }

        .info-2 {
            /* border: 1px solid rgb(4, 0, 59); */
            width: 17vh;
            height: 12vh;
              margin:15px 25px;
        }

        .join-date {
            /* border: 1px solid rgb(2, 92, 17); */
            width: 17vh;
            height: 5vh;
        }

        .join-date h4 {
            color: rgb(179, 116, 0);
            font-size:15px;
        }

        .expire-date {
            /* border: 1px solid rgb(0, 46, 105); */
            width: 17vh;
            height: 5vh;
            margin: 8px 0px 0px 0px;
        }

        .expire-date h4 {
            color: rgb(179, 116, 0);
            font-size:15px;
        }

        .info-3 {
            /* border: 1px solid rgb(255, 38, 0); */
            width: 17vh;
            height: 12vh;
              margin:15px 25px;
        }

        .email {
            /* border: 1px solid rgb(2, 92, 17); */
            width: 22vh;
            height: 5vh;
        }

        .email h4 {
            color: rgb(179, 116, 0);
            font-size:15px;
        }

        .phone {
            /* border: 1px solid rgb(0, 46, 105); */
            width: 17vh;
            height: 5vh;
            margin: 8px 0px 0px 0px;
        }

        .info-4 {
            /* border: 2px solid rgb(255, 38, 0); */
            width: 22vh;
            height: 12vh;
            margin: 0px 0px 0px 0px;
            font-size:15px;
        }

        .phone h4 {
            color: rgb(179, 116, 0);
            font-size:15px;
        }

        .sign {
            /* border: 1px solid rgb(0, 46, 105); */
            width: 17vh;
            height: 5vh;
            margin: 41px 0px 0px 20px;
            text-align: center;
        }
    </style>