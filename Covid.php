<?php 

    session_start();
    // if(!isset($_SESSION['username'])) {
    //     $_SESSION['msg'] = "You must log in first";
    //     header('location: login.php');
    //  }

    // if(isset($_GET['logout'])) {
    //     session_destroy();
    //      unset($_SESSION['username']);
    //      header('location: login.php');
    //  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="Style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid" id="home">
        <h1>Covid Tracker</h1>
        <h5>เว็บไซต์เช็คสถาการโควิด 19 แบบ Real-time</h5>

    </div>

    <div class="container-fluid" id="home2">
    <?php if(isset($_SESSION['username'])) : ?> 
    
        <p> <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
</svg> Welcome <strong><?php echo $_SESSION ['username']; ?></strong></p>
        <p><a href="index.php?logout='1'"style="color:red;">Logout</a></p>
        <?php endif ?>
     </div>


    <div class="jumbotron big-banner" style="height:11050px">
    
    
        <div class="statistic">
            <h1 id="World"><b>World Statistic</b></h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 " id="total_case_box">
                        <h2>
                            <svg class="bi bi-folder" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.828 4a3 3 0 01-2.12-.879l-.83-.828A1 1 0 006.173 2H2.5a1 1 0 00-1 .981L1.546 4h-1L.5 3a2 2 0 012-2h3.672a2 2 0 011.414.586l.828.828A2 2 0 009.828 3v1z"/>
                                <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 00-.996 1.09l.637 7a1 1 0 00.995.91h10.348a1 1 0 00.995-.91l.637-7A1 1 0 0013.81 4zM2.19 3A2 2 0 00.198 5.181l.637 7A2 2 0 002.826 14h10.348a2 2 0 001.991-1.819l.637-7A2 2 0 0013.81 3H2.19z" clip-rule="evenodd"/>
                              </svg> <b>Total Cases</b>
                        </h2>
                        <p style="font-size: 3rem;" id="total_cases">test</p>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <!-- container -->
        </div>


        <div class="container" id="Bar">
            <div class="row">
                <div class="col-6 col-md-3" id="total_death_box">
                    <h3>
                        <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                          </svg> <b>Total Deaths</b>
                    </h3>
                    <p style="font-size: 3rem; text-align: center; " id="total_death">Test</p>
                </div>
                <div class="col-6 col-md-3" id="total_recovery_box">
                    <h3>
                        <svg class="bi bi-bootstrap-reboot" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1.161 8a6.84 6.84 0 106.842-6.84.58.58 0 010-1.16 8 8 0 11-6.556 3.412l-.663-.577a.58.58 0 01.227-.997l2.52-.69a.58.58 0 01.728.633l-.332 2.592a.58.58 0 01-.956.364l-.643-.56A6.812 6.812 0 001.16 8zm5.48-.079V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6zm0 3.75V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141z" clip-rule="evenodd"/>
                          </svg> <b>Total Recovered</b>
                    </h3>
                    <p style="font-size: 3rem; text-align: center;" id="total_Recover">Test</p>
                </div>
                <div class="col-6 col-md-3" id="new_case_box">
                    <h3>
                        <svg class="bi bi-folder-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 00-.996 1.09l.637 7a1 1 0 00.995.91H9v1H2.826a2 2 0 01-1.991-1.819l-.637-7a1.99 1.99 0 01.342-1.31L.5 3a2 2 0 012-2h3.672a2 2 0 011.414.586l.828.828A2 2 0 009.828 3h3.982a2 2 0 011.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0013.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 011-.98h3.672a1 1 0 01.707.293z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M13.5 10a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13v-1.5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M13 12.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd"/>
                          </svg> <b>New cases</b>
                    </h3>
                    <p style="font-size: 3rem; text-align: center;" id="new_case">Test</p>

                </div>
                <div class="col-6 col-md-3" id="new_death_box">
                    <h3>
                        <svg class="bi bi-person-plus-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm7.5-3a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V5.5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M13 7.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd"/>
                          </svg> <b>New Deaths</b>
                    </h3>
                    <p style="font-size: 3rem; text-align: center;" id="new_death">Test</p>
                </div>
            </div>

        </div>
        <!-- bar data -->



        <div class="container" id="table">
            <table class="table table-striped table-dark" id="country_stat">
                <thead>
                    <tr>
                        <th scope="col">Country</th>
                        <th scope="col">Cases</th>
                        <th scope="col">Deaths</th>
                        <th scope="col">Serious critical</th>
                        <th scope="col">Total recovered</th>
                    </tr>
                </thead>
            </table>
        </div>
        <script>

let new_cases = document.getElementById('new_case');
let new_death = document.getElementById('new_death');
let total_death = document.getElementById('total_death');
let total_recover = document.getElementById('total_Recover');
let total_cases = document.getElementById('total_cases');
let table = document.getElementById('country_stat');


// fetcing the world Data

fetch("https://coronavirus-monitor.p.rapidapi.com/coronavirus/worldstat.php", {
        "method": "GET",
        "headers": {
            "x-rapidapi-host": "coronavirus-monitor.p.rapidapi.com",
            "x-rapidapi-key": "32006a1e3cmsh384151bc13f8d7cp170aaejsnb0136e30b0c7"
        }
    })
    .then(response => response.json().then(data => {
        console.log(data);
        total_cases.innerHTML = data.total_cases;
        new_cases.innerHTML = data.new_cases;
        new_death.innerHTML = data.new_deaths;
        total_death.innerHTML = data.total_deaths;
        total_recover.innerHTML = data.total_recovered;
    }))

.catch(err => {
    console.log(err);
});


// fetcing case by country

fetch("https://coronavirus-monitor.p.rapidapi.com/coronavirus/cases_by_country.php", {
        "method": "GET",
        "headers": {
            "x-rapidapi-host": "coronavirus-monitor.p.rapidapi.com",
            "x-rapidapi-key": "32006a1e3cmsh384151bc13f8d7cp170aaejsnb0136e30b0c7"
        }
    })
    .then(response => response.json().then(data => {
        console.log(data);
        let country_stat = data.countries_stat;
        for (let i = 0; i < country_stat.length; i++) {
            console.log(country_stat[i]);
            let row = table.insertRow(i + 1);
            let country_name = row.insertCell(0);
            let cases = row.insertCell(1);
            let death = row.insertCell(2);
            let serious_critical = row.insertCell(3);
            let recover_country = row.insertCell(4)
            country_name.innerHTML = country_stat[i].country_name;
            cases.innerHTML = country_stat[i].cases;
            death.innerHTML = country_stat[i].deaths;
            serious_critical.innerHTML = country_stat[i].serious_critical;
            recover_country.innerHTML = country_stat[i].total_recovered;
        }

    }))
    .catch(err => {
        console.log(err);
    });
        </script>

</body>
