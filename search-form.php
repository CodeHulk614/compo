<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="path/to/file/jquery.min.js"></script>
<link href="path/to/file/select2.min.css" rel="stylesheet" />
<script src="path/to/file/select2.min.js"></script>
</head>
<body onload="selectYear()">

    <h1>Search Engine Form</h1>

    <form action="" method="POST" enctype="multipart/form-data">

    <label for="location">Location</label>
        <select id="location" name="location" required>
            <option value="Austraila">Austraila</option>
            <option value="Canada" selected>Canada</option>
            <option value="Dubai">Dubai</option>
            <option value="Germany">Germany</option>
            <option value="Ireland">Ireland</option>
            <option value="Malaysia">Malaysia</option>
            <option value="UK" selected>UK</option>
            <option value="USA">USA</option>
        </select>

        <label for="school">School Name</label>
        <select class="form-control" id="school" name="school" required>
            <option value="Abbey College">Abbey College</option>
            <option value="Aberytwyth University">Aberytwyth University</option>
            <option value="Algoquin College">Algoquin College</option>
            <option value="American College Ireland">American College Ireland</option>
            <option value="American University of Barbados">American University of Barbados</option>
            <option value="Angelia Ruskin University">Angelia Ruskin University</option>
            <option value="Arden University" >Arden University</option>
            <option value="Aston University">Aston University</option>
            <option value="Athlone Institute of Technology">Athlone Institute of Technology</option>
            <option value="Auburn University">Auburn University</option>
            <option value="Aviation Institute of Maintenance">Aviation Institute of Maintenance</option>
            <option value="BCU">BCU</option>
            <option value="BCUIC">BCUIC</option>
            <option value="Bedfordshire University">Bedfordshire University</option>
            <option value="Birkbeck  University" >Birkbeck  University</option>
            <option value="BPP University">BPP University</option>
            <option value="Braemer College">Braemer College</option>
            <option value="Brighton University">Brighton University</option>
            <option value="Brock University">Brock University</option>
            <option value="Brunel University">Brunel University</option>
            <option value="BSBI">BSBI</option>
            <option value="Buckingham University">Buckingham University</option>
            <option value="Cambridge Education Group" >Cambridge Education Group</option>
            <option value="Cardiff University">Cardiff University</option>
            <option value="Cardiff Metropolitan University">Cardiff Metropolitan University</option>
            <option value="Carleton University">Carleton University</option>
            <option value="CATS College">CATS College</option>
            <option value="Centennial College">Centennial College</option>
            <option value="Chelton University">Chelton University</option>
            <option value="Chester University">Chester University</option>
            <option value="City London University" >City London University</option>
            <option value="Cleveland State University">Cleveland State University</option>
            <option value="Concordia University">Concordia University</option>
            <option value="Coventry University">Coventry University</option>
            <option value="Cranfield University">Cranfield University</option>
            <option value="CRIC">CRIC</option>
            <option value="Curtin University">Curtin University</option>
            <option value="Dalhousie University">Dalhousie University</option>
            <option value="De Montfort University" >De Montfort University</option>
            <option value="DIFC">DIFC</option>
            <option value="Drew University">Drew University</option>
            <option value="Dublin Business School">Dublin Business School</option>
            <option value="Dundalk Institute of Technology">Dundalk Institute of Technology</option>
            <option value="Dundee University">Dundee University</option>
            <option value="Edinburgh Napier University">Edinburgh Napier University</option>
            <option value="Edith Cowan University">Edith Cowan University</option>
            <option value="EduCo" >EduCo</option>
            <option value="Essex University">Essex University</option>
            <option value="Executive One Capital">Executive One Capital</option>
            <option value="FAU">FAU</option>
            <option value="FIC">FIC</option>
            <option value="GCU">GCU</option>
            <option value="George Mason University">George Mason University</option>
            <option value="GISMA">GISMA</option>
            <option value="Great Lakes College" >Great Lakes College</option>
            <option value="Griffith University">Griffith University</option>
            <option value="Griffith College">Griffith College</option>
            <option value="Heriott Watt University">Heriott Watt University</option>
            <option value="HIC">HIC</option>
            <option value="Hull University">Hull University</option>
            <option value="ICM">ICM</option>
            <option value="ICP">ICP</option>
            <option value="ICRGU" >ICRGU</option>
            <option value="ICWS">ICWS</option>
            <option value="Illinois State University">Illinois State University</option>
            <option value="Illinois State University-INTO">Illinois State University-INTO</option>
            <option value="Institute Of Technology, Sligo">Institute Of Technology, Sligo</option>
            <option value="INTO Partnerships">INTO Partnerships</option>
            <option value="IUBH">IUBH</option>
            <option value="James Cook University">James Cook University</option>
            <option value="Kaplan University" >Kaplan University</option>
            <option value="Keele University">Keele University</option>
            <option value="Kent University">Kent University</option>
            <option value="Kings College London">Kings College London</option>
            <option value="Kignston University">Kignston University</option>
            <option value="La Trobe University">La Trobe University</option>
            <option value="Landmark University">Landmark University</option>
            <option value="LBIC">LBIC</option>
            <option value="Leeds Beckett" >Leeds Beckett</option>
            <option value="Leicester University">Leicester University</option>
            <option value="Limerick University">Limerick University</option>
            <option value="Lincoln University">Lincoln University</option>
            <option value="LIU">LIU</option>
            <option value="Liverpool John Moores University">Liverpool John Moores University</option>
            <option value="Loughborough University">Loughborough University</option>
            <option value="LSBU">LSBU</option>
            <option value="Malvern International College" >Malvern International College</option>
            <option value="Manchester Metropolitan University">Manchester Metropolitan University</option>
            <option value="Marshall University">Marshall University</option>
            <option value="Maynooth University">Maynooth University</option>
            <option value="Middlesex Mauritius">Middlesex Mauritius</option>
            <option value="Middlesex University">Middlesex University</option>
            <option value="Middlesex University Malta">Middlesex University Malta</option>
            <option value="MIT">MIT</option>
            <option value="Murdoch University" >Murdoch University</option>
            <option value="NAVITAS">NAVITAS</option>
            <option value="National College of Ireland NIC">National College of Ireland NIC</option>
            <option value="New Brunswick University">New Brunswick University</option>
            <option value="Newcastle University">Newcastle University</option>
            <option value="Niagara College">Niagara College</option>
            <option value="Ireland">Ireland</option>
            <option value="Northampton University">Northampton University</option>
            <option value="Northumbria University" >Northumbria University</option>
            <option value="Northumbria QA">Northumbria QA</option>
            <option value="Nottingham University">Nottingham University</option>
            <option value="OXB">OXB</option>
            <option value="Pace University">Pace University</option>
            <option value="RAU">RAU</option>
            <option value="Robert Gordon University">Robert Gordon University</option>
            <option value="Royal Halloway University" >Royal Halloway University</option>
            <option value="Royal Roads University">Royal Roads University</option>
            <option value="SFU">SFU</option>
            <option value="Sheffield Hallam University">RAU</option>
            <option value="St Michael's School">St Michael's School</option>
            <option value="Shorelight">Shorelight</option>
            <option value="Staffordshire University">Staffordshire University</option>
            <option value="Strathclyde University">Strathclyde University</option>
            <option value="Study Group">Study Group</option>
            <option value="Swansea University">Swansea University</option>
            <option value="Surrey University">Surrey University</option>
            <option value="TAIE Institute">TAIE Institute</option>
            <option value="TAIE College">TAIE College</option>
            <option value="Technological University Dublin">Technological University Dublin</option>
            <option value="Teeside University">Teeside University</option>
            <option value="Texas A&M">Texas A&M</option>
            <option value="Texila American University">RAU</option>
            <option value="The College-Swansea University">The College-Swansea University</option>
            <option value="The University of West of Scotland">The University of West of Scotland</option>
            <option value="Trinity College Dublin">Trinity College Dublin</option>
            <option value="TRU">TRU</option>
            <option value="TUD">TUD</option>
            <option value="UAB">UAB</option>
            <option value="UCC">UCC</option>
            <option value="UCLAN">UCLAN</option>
            <option value="UCLAN Cyprus">UCLAN Cyprus</option>
            <option value="UEA">UEA</option>
            <option value="UEL">UEL</option>
            <option value="ULaw">ULaw</option>
            <option value="Ulster University">Ulster University</option>
            <option value="Ulster QA">Ulster QA</option>
            <option value="Umass Boston">Umass Boston</option>
            <option value="Umass Dartmouth">Umass Dartmouth</option>
            <option value="UNIC">UNIC</option>
            <option value="UniSA">UniSA</option>
            <option value="University of Birmingham">University of Birmingham</option>
            <option value="University College of Birmingham">University College of Birmingham</option>
            <option value="University of London">University of London</option>
            <option value="University of Aberdeen">University of Aberdeen</option>
            <option value="University of Bedfordshire">University of Bedfordshire</option>
            <option value="University of Birbeck">University of Birbeck</option>
            <option value="University of Bolton">University of Bolton</option>
            <option value="University of Bournemouth">University of Bournemouth</option>
            <option value="University of Bradford">University of Bradford</option>
            <option value="University of Bristol">University of Bristol</option>
            <option value="University of Buckingham">University of Buckingham</option>
            <option value="University of Derby">University of Derby</option>
            <option value="University of Dundee">University of Dundee</option>
            <option value="University of Edgehill-Si-UK">University of Edgehill-Si-UK</option>
            <option value="University of Essex">University of Essex</option>
            <option value="University of Greenwich">University of Greenwich</option>
            <option value="University of Hertfordshire">University of Hertfordshire</option>
            <option value="University of Huddersfield">University of Huddersfield</option>
            <option value="University of Hull">University of Hull</option>
            <option value="University of Kent">University of Kent</option>
            <option value="University of Law-GISMA">University of Law-GISMA</option>
            <option value="University of Leeds">University of Leeds</option>
            <option value="University of Leicester">University of Leicester</option>
            <option value="University of Limerick">University of Limerick</option>
            <option value="University of Lincoln">University of Lincoln</option>
            <option value="University of Liverpool">University of Liverpool</option>
            <option value="University of Manitoba">University of Manitoba</option>
            <option value="University of New Brunswick">University of New Brunswick</option>
            <option value="University of Nottingham">University of Nottingham</option>
            <option value="University of Plymouth">University of Plymouth</option>
            <option value="University of Portsmouth">University of Portsmouth</option>
            <option value="University of Reading">University of Reading</option>
            <option value="University of Roehampton">University of Roehampton</option>
            <option value="University of Salford">University of Salford</option>
            <option value="University of Sheffield">University of Sheffield</option>
            <option value="University of South Wales">University of South Wales</option>
            <option value="University of Stirling">University of Stirling</option>
            <option value="University of Strathclyde">University of Strathclyde</option>
            <option value="University of Sunderland">University of Sunderland</option>
            <option value="University of Sussex">University of Sussex</option>
            <option value="University of Tasmania">University of Tasmania</option>
            <option value="University of Toronto">University of Toronto</option>
            <option value="University of Warwick">University of Warwick</option>
            <option value="University of West London">University of West London</option>
            <option value="University of Westminster">University of Westminster</option>
            <option value="University of Windsor">University of Windsor</option>
            <option value="UWE Bristol">UWE Bristol</option>
            <option value="Vancouver Island University">Vancouver Island University</option>
            <option value="Waterford Institute of Technology">Waterford Institute of Technology</option>
            <option value="We Bridge Academy">We Bridge Academy</option>
            <option value="Western Sydney University">Western Sydney University</option>
            <option value="Western Washington University">Western Washington University</option>
            <option value="Wolverhampton University">Wolverhampton University</option>
            <option value="Oxford Brookes University">Oxford Brookes University</option>
            <option value="Christ Canterbury">Christ Canterbury</option>
            <option value="Queen Mary University">Queen Mary University</option>
            <option value="The University of Winnipeg">The University of Winnipeg</option>
            <option value="Oxford International Education Group">Oxford International Education Group</option>
            <option value="University Academy 92 Manchester">University Academy 92 Manchester</option>
            <option value="University of Gloucestershire">University of Gloucestershire</option>
            <option value="ONCAMPUS Aston">ONCAMPUS Aston</option>
            <option value="ONCAMPUS Coventry">ONCAMPUS Coventry</option>
            <option value="ONCAMPUS Hull">ONCAMPUS Hull</option>
            <option value="ONCAMPUS London">ONCAMPUS London</option>
            <option value="ONCAMPUS London South Bank">ONCAMPUS London South Bank</option>
            <option value="ONCAMPUS Reading">ONCAMPUS Reading</option>
            <option value="ONCAMPUS Southampton">ONCAMPUS Southampton</option>
            <option value="ONCAMPUS Sunderland">ONCAMPUS Sunderland</option>
            <option value="ONCAMPUS UK North">ONCAMPUS UK North</option>
            <option value="ONCAMPUS USA Boston">ONCAMPUS USA Boston</option>
            <option value="ONCAMPUS Amsterdam">ONCAMPUS Amsterdam</option>
            <option value="ONCAMPUS Lund Sweden">ONCAMPUS Lund Sweden</option>
            <option value="Oxford International">Oxford International</option>
            <option value="Wrexham Glyndwr University">Wrexham Glyndwr University</option>
            <option value="Torrens University">Torrens University</option>
            <option value="Flinders University">Flinders University</option>
            <option value="Universities of the Creative Art">Universities of the Creative Art</option>
            <option value="York St John University">York St John University</option>
            <option value="San Francisco State University">San Francisco State University</option>
            <option value="Stanfordshire University">Stanfordshire University</option>
            <option value="De Montfort University International College">De Montfort University International</option>
            <option value="University of Bath">University of Bath</option>
            <option value="Bangor University International College">Bangor University International College</option>
            <option value="University of Greenwich International College">University of Greenwich International College</option>
            <option value="International College Dundee">International College Dundee</option>
            <option value="University of Bradford International College">University of Bradford International College</option>
            <option value="Ryerson University">Ryerson University</option>
            <option value="Simon Fraser University">Simon Fraser University</option>
            <option value="Worcester University">Worcester University</option>
            <option value="Goldsmith University">Goldsmith University</option>
            <option value="Adelphi University">Adelphi University</option>
            <option value="American Collegiate DC">American Collegiate DC</option>
            <option value="American Collegiate LA">American Collegiate LA</option>
            <option value="American Collegiate Live">American Collegiate Live</option>
            <option value="American University">American University</option>
            <option value="Towson University">Towson University</option>
            <option value="Auburn University at Montgomery">Auburn University at Montgomery</option>
            <option value="Austin College">Austin College</option>
            <option value="Blackburn College">Blackburn College</option>
            <option value="Central Methodist University">Central Methodist University</option>
            <option value="Edgewood College">Edgewood College</option>
            <option value="Eureka College">Eureka College</option>
            <option value="Florida International University">Florida International University</option>
            <option value="Gonzaga University">Gonzaga University</option>
            <option value="Jacksonville University">Jacksonville University</option>
            <option value="Johns Hopkins University">Johns Hopkins University</option>
            <option value="Lakeland University">Lakeland University</option>
            <option value="Louisiana State University">Louisiana State University</option>
            <option value="Palm Beach Atlantic University">Palm Beach Atlantic University</option>
            <option value="Robert Morris University">Robert Morris University</option>
            <option value="Roosevelt University">Roosevelt University</option>
            <option value="Si-UK">Si-UK</option>
            <option value="Southwestern University">Southwestern University</option>
            <option value="St Thomas Aquinas College">St Thomas Aquinas College</option>
            <option value="Tulane University">Tulane University</option>
            <option value="University of Carlifonia - Berkeley">University of Carlifonia - Berkeley</option>
            <option value="University of Central Florida">University of Central Florida</option>
            <option value="University of Dayton">University of Dayton</option>
            <option value="University of Illinois Springfield">University of Illinois Springfield</option>
            <option value="University of Illinois Chicago">University of Illinois Chicago</option>
            <option value="University of Kensas">University of Kensas</option>
            <option value="University of Messachusettes Amherst">University of Messachusettes Amherst</option>
            <option value="University of Messachusettes Boston">University of Messachusettes Boston</option>
            <option value="University of Mississippi">University of Mississippi</option>
            <option value="University of the Pacific">University of the Pacific</option>
            <option value="University of South Carolina">University of South Carolina</option>
            <option value="University of Utah">University of Utah</option>
            <option value="Washington of Jefferson College">Washington of Jefferson College</option>
            <option value="Wentworth Institute of Technology">Wentworth Institute of Technology</option>
            <option value="Western Oregon University">Western Oregon University</option>
            <option value="Wilson College">Wilson College</option>
        </select>

        <label for="month">Intake Month</label>
        <select id="month" name="month" required>
            <option value="January">January</option>
            <option value="Mid" selected>Mid Year</option>
            <option value="September">September</option>
        </select>

        <label for="year">Intake Year</label>
        <select id="year" name="year" required>
        <option value="2022" selected>2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
        <option value="2026">2026</option>
        </select>

        <label for="degree">Degree</label>
        <select id="degree" name="degree" required>
            <option value="PHD">PHD</option>
            <option value="Masters" selected>Masters</option>
            <option value="Pre Masters">Pre Masters</option>
            <option value="Top Up">Top Up</option>
            <option value="Bsce">BSCE</option>
            <option value="Foundation">Foundation</option>
        </select>

        <label for="faculty">Faculty</label>
        <select class="form-control" id="faculty" name="faculty" required>
            <option value="Faculty of Science">Faculty of Science</option>
            <option value="Faculty of Engineering" >Faculty of Engineering</option>
            <option value="Faculty of Business">Faculty of Business</option>
            <option value="Faculty of Arts">Faculty of Arts</option>
            <option value="Faculty of Dentistry">Faculty of Dentistry</option>
            <option value="Faculty of Education">Faculty of Education</option>
            <option value="Faculty of Law" selected>Faculty of Law</option>
            <option value="Faculty of Medicine">Faculty of Medicine</option>
            <option value="Faculty of Social Science">Faculty of Social Science</option>
            <option value="Faculty of Technology">Faculty of Technology</option>
            <option value="Faculty of Clinical Science and Dentistry">Faculty of Clinical Science and Dentistry</option>
            <option value="Faculty of Basic Medical Sciences">Faculty of Basic Medical Sciences</option>
            <option value="Faculty Agriculture & Forestry">Faculty Agriculture & Forestry</option>
            <option value="Faculty of Pharmacy">Faculty of Pharmacy</option>
            <option value="Faculty of Construction and Environment">Faculty of Construction and Environment</option>
            <option value="Faculty of Health and Social Science">Faculty of Health and Social Science</option>
            <option value="Faculty of Humanities">Faculty of Humanities</option>
            <option value="Faculty of Brain Sciences">Faculty of Brain Sciences</option>
            <option value="Engineering Sciences">Engineering Sciences</option>
            <option value="Institute of Education">Institute of Education</option>
            <option value="Faculty of Life Sciences">Faculty of Life Sciences</option>
            <option value="Mathematical & Physical Sciences">Mathematical & Physical Sciences</option>
            <option value="Population Health Sciences">Population Health Sciences</option>
            <option value="Social & Historical Sciences">Social & Historical Sciences</option>
            <option value="Faculty of Engineering and Information Sciences">Faculty of Engineering and Information Sciences</option>

        </select>

        <label for="course">Course Name</label>
        <input type="course" id="course" name="course" required>

        <fieldset>
            <legend>Availability</legend>

            <label>
                <input type="radio" name="available" value="available" checked>
                Available
            </label>

            <br>

            <label>
                <input type="radio" name="available" value="unavailable">
                Unavailable
            </label>
        </fieldset>

        <button type="submit" name="submit">Submit</button>

    </form>

    <script>
 $(function(){
  $("#school").select2();
 }); 
</script>
<script>
 $(function(){
  $("#faculty").select2();
 }); 
</script>
</body>
</html>

<?php 
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "tgm");

    if(isset($_POST['submit'])){
        $location = $_POST["location"];
        $school = $_POST["school"];
        $month = $_POST["month"];
        $year = $_POST["year"];
        $degree = $_POST["degree"];
        $faculty = $_POST["faculty"];
        $course = $_POST["course"];
        $available = $_POST["available"];


        $query = "INSERT INTO search (`location`, `school`, `month`, `year`, `degree`, `faculty`, `course`, `available`)
        VALUES ('$location','$school', '$month','$year','$degree','$faculty','$course','$available')";
        $query_run = mysqli_query($connection, $query);


        if($query_run){
            echo "Sent Successfully";
        }else {
            echo "Error Occured";
           
        }
    }
?>