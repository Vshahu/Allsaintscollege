   <?php
include 'connect/connectdb.php';?>
    </div>
    <!-- Javascript files-->
   <!-- Javascript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/jquery-ical.js" type="text/javascript" charset="utf-8"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="js/front.js"></script>
    <script type="text/javascript">
$(document).ready(function()
{ 
$("#ical").ical({
eventdates: [
<?php
try {
    $arr = [];
    $stmt = $connect->prepare("select * from asc_calender");
    if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
            foreach ($stmt->fetchAll() as $row) {
                $var = $row['event_date'];
//array_push($arr, '{title: "' . $row['title'] . '",start: "' . $var . '",description:"' . $row['description'] . '"}');
array_push($arr, '{"date": "' . $var . '","title": " ","desc":"","event1": " ", "event_desc": " ' . $row['eventdetails'] . '"}');

			}
            echo implode(',', $arr);
        }
    }
} catch (PDOException $e) {
    echo "Tech error " . $e->getMessage();
}
?>
	// {"date": "2019-02-03", "title": " ", "desc": "3rd Feb, Sunday", "event1": " ", "event_desc": "ISC - 2019 (Board giving) Check in 10:00 a.m to 3:00 p.m"}
// ,   {"date": "2019-02-05", "title": " ", "desc": "5th Feb, Tuesday", "event1": " ", "event_desc": "ICSE & ISC - 2020  Check in 10:00 a.m to 3:00 p.m"}
// ,   {"date": "2019-02-06", "title": " ", "desc": "6th Feb, Wednesday", "event1": " ", "event_desc": "Classes begins for ICSE & ISC 2020"}
// ,   {"date": "2019-02-20", "title": " ", "desc": "20th Feb, Wednesday", "event1": " ", "event_desc": "ISCE - 2019 (Board giving)Check in from 10:00 a.m.  to 3:00 p.m."}
// ,   {"date": "2019-02-26", "title": " ", "desc": "26th Feb, Tuesday", "event1": " ", "event_desc": "Classes 1 to 9 Check in from 10:00 a.m.  to 3:00 p.m."}
// ,   {"date": "2019-02-27", "title": " ", "desc": "27th Feb, Wednesday", "event1": " ", "event_desc": "School Re-opens for the Session 2019"}
// ,   {"date": "2019-03-25", "title": " ", "desc": "25th Mar, Monday", "event1": " ", "event_desc": "Univariety Student & Parent Orientation & Profile"}
// ,   {"date": "2019-03-27", "title": " ", "desc": "27th Mar, Wednesday", "event1": " ", "event_desc": "Completion foe new students (classes 9, 10, & 12)"}
// ,   {"date": "2019-04-02", "title": " ", "desc": "2nd Apr, Tuesday", "event1": " ", "event_desc": "Check-In Class 11 Boarders"}
// ,   {"date": "2019-04-03", "title": " ", "desc": "3rd Apr, Wednesday", "event1": " ", "event_desc": "Classes begin for Class 11"}
// ,   {"date": "2018-04-24", "title": " ", "desc": "24th Apr, Tuesday", "event1": " ", "event_desc": "Commencement of FIRST TERM test"}
// ,   {"date": "2019-04-17", "title": " ", "desc": "17th Apr, Wednesday", "event1": " ", "event_desc": "EASTER BREAK Check-Out from 12:30 pm to 3:00 pm (Compulsory)"}
// ,   {"date": "2019-04-23", "title": " ", "desc": "23rd Apr, Tuesday", "event1": " ", "event_desc": "Check in from 10:00 a.m.  to 3:00 p.m."}
// ,   {"date": "2019-04-24", "title": " ", "desc": "24th Apr, Wednesday", "event1": " ", "event_desc": "Career Counselling - ICS Lucknow Class VIII & X"}
// ,   {"date": "2018-05-28", "title": " ", "desc": "28th May, Monday", "event1": " ", "event_desc": "Career Counselling - ICS Lucknow Class VIII & X"}
// ,   {"date": "2018-05-01", "title": " ", "desc": "1st May, Tuesday", "event1": " ", "event_desc": "Labour Day"}
// ,   {"date": "2018-05-11", "title": " ", "desc": "11th May, Friday", "event1": " ", "event_desc": "Commencement of First Terms Second Tests (Friday, 11th May to Wednesday 23rd May 2018)"}
// ,   {"date": "2018-06-01", "title": " ", "desc": "1st Jun, Friday", "event1": " ", "event_desc": "Senior School Annual Concert at 5:00 p.m."}
// ,   {"date": "2018-06-02", "title": " ", "desc": "2nd Jun, Saturday", "event1": " ", "event_desc": "Annual PT Display at 10:00 a.m. Summer Break Check-out begins from  1:00 p.m. [Compulsory]"}
// ,   {"date": "2018-06-26", "title": " ", "desc": "26th Jun, Tuesday", "event1": " ", "event_desc": "Check-in from 10:00 a.m. to 5:00 p.m. Parent teacher interaction for all from 10:00 a.m. to 5:00 p.m. [Compulsory]"}
// ,   {"date": "2018-07-02", "title": " ", "desc": "2nd Jul, Monday", "event1": " ", "event_desc": "Commencement of the First Term First test for Class XI (From Monday 2nd July to Saturday 7th July, 2018)"}
// ,   {"date": "2018-07-03", "title": " ", "desc": "3rd Jul, Tuesday", "event1": " ", "event_desc": "Class VI, VII & VIII Communication Workshop (One Step Up)"}
// ,   {"date": "2018-07-04", "title": " ", "desc": "4th Jul, Wednesday", "event1": " ", "event_desc": "Class VI, VII & VIII Communication Workshop (One Step Up)"}
// ,   {"date": "2018-07-05", "title": " ", "desc": "5th Jul, Thursday", "event1": " ", "event_desc": "Class VII & VIII Communication Workshop (One Step Up)"}
// ,   {"date": "2018-08-15", "title": " ", "desc": "15th Aug, Wednesday", "event1": " ", "event_desc": "Independence Day - Inter House Play and Singing."}
// ,   {"date": "2018-08-20", "title": " ", "desc": "20th Aug, Monday", "event1": " ", "event_desc": "Personality Development Class - IX"}
// ,   {"date": "2018-08-25", "title": " ", "desc": "25th Aug, Saturday", "event1": " ", "event_desc": "Check-out for Raksha Bandhan from 9:00 am to 3:00 p.m."}
// ,   {"date": "2018-08-28", "title": " ", "desc": "28th Aug, Tuesday", "event1": " ", "event_desc": "Check-in from 11:00 a.m. to 3:00 p.m."}
// ,   {"date": "2018-09-04", "title": " ", "desc": "4th Sep, Tuesday", "event1": " ", "event_desc": "Aquatic Meet 10:00 a.m."}
// ,   {"date": "2018-09-07", "title": " ", "desc": "7th Sep, Friday", "event1": " ", "event_desc": "Half Yearly Examination for Senior and Junior School (From Friday 7th September to Thursday 20th September, 2018)"}
// ,   {"date": "2018-09-22", "title": " ", "desc": "22nd Sep, Saturday", "event1": " ", "event_desc": "Sabrang (Junior School)"}
// ,   {"date": "2018-10-03", "title": " ", "desc": "3rd Oct, Wednesday", "event1": " ", "event_desc": "Career Counselling - ICS Lucknow Classes XI & XII "}
// ,   {"date": "2018-10-04", "title": " ", "desc": "4th Oct, Thursday", "event1": " ", "event_desc": "Career Counselling - ICS Lucknow Classes XI & XII"}
// ,   {"date": "2018-10-05", "title": " ", "desc": "5th Oct, Friday", "event1": " ", "event_desc": "Career Counselling - ICS Lucknow Classes XI & XII"}
// ,   {"date": "2018-10-11", "title": " ", "desc": "11th Oct, Thursday", "event1": " ", "event_desc": "Class VIII Communication Workshop (One Step Up)"}
// ,   {"date": "2018-10-12", "title": " ", "desc": "12th Oct, Friday", "event1": " ", "event_desc": "Class VIII Communication Workshop (One Step Up)"}
// ,   {"date": "2018-10-16", "title": " ", "desc": "16th Oct, Tuesday", "event1": " ", "event_desc": "Check-out for Dussehra from 12:00 noon to 3:00 p.m."}
// ,   {"date": "2018-10-22", "title": " ", "desc": "22nd Oct, Monday", "event1": " ", "event_desc": "Check-in from 11:00 a.m. to 3:00 p.m."}
// ,   {"date": "2018-10-31", "title": " ", "desc": "31st Oct, Wednesday", "event1": " ", "event_desc": "Even Song Service at 5:00 p.m."}
// ,   {"date": "2018-11-01", "title": " ", "desc": "1st Nov, Thursday", "event1": " ", "event_desc": "Athletic Meet at 10:00 a.m.  Check-out for Diwali from 1:00 p.m. to 3:00 p.m. [Compulsory]"}
// ,   {"date": "2018-11-12", "title": " ", "desc": "12th Nov, Monday", "event1": " ", "event_desc": "Check-in from 11:00 a.m. to 3:00 p.m."}
// ,   {"date": "2018-11-15", "title": " ", "desc": "15th Nov, Thursday", "event1": " ", "event_desc": "Nativity Play"}
// ,   {"date": "2018-11-16", "title": " ", "desc": "16th Nov, Friday", "event1": " ", "event_desc": "Junior School Final Examination Commences "}
// ,   {"date": "2018-11-17", "title": " ", "desc": "17th Nov, Saturday", "event1": " ", "event_desc": "Senior School Final Examination Commences"}
// ,   {"date": "2018-11-28", "title": " ", "desc": "28th Nov, Wednesday", "event1": " ", "event_desc": "Junior School closes for Winter Vacation.  Check-out starts from 1:00 p.m."}
// ,   {"date": "2018-11-30", "title": " ", "desc": "30th Nov, Friday", "event1": " ", "event_desc": "Senior School closes for Winter Vacation.  Check-out from 1:00 p.m."}
// ,   {"date": "2018-12-01", "title": " ", "desc": "1st Dec, Saturday", "event1": " ", "event_desc": "Entrance Test "}
// ,   {"date": "", "title": " ", "desc": "1st Jan, Thursday", "event1": " ", "event_desc": ""}
// ,   {"date": "", "title": " ", "desc": "1st Jan, Thursday", "event1": " ", "event_desc": ""}
,  ]
});
});
</script>
  </body>
</html>