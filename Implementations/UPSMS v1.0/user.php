<!DOCTYPE html>

<!--
 The MIT License (MIT)
 Copyright (c) 2016 UPSMS
 Authors:
   Prototype Front-End Developer: Patricia Regarde
   Front-End and Back-End Developer: Cyan Villarin

 Permission is hereby granted, free of charge, to any person obtaining a copy
 of this software and associated documentation files (the "Software"), to deal
 in the Software without restriction, including without limitation the rights
 to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:
 The above copyright notice and this permission notice shall be included in all
 copies or substantial portions of the Software.

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 SOFTWARE.

 This is a course requirement for CS 192 Software Engineering II under the
 supervision of Asst. Prof. Ma. Rowena C. Solamo of the Department of Computer
 Science, College of Engineering, University of the Philippines, Diliman for
 the AY 2015-2016

 Code History:
  Decemeber 10, 2015: Cyan Villarin  finished Front End of Protoype for user.php
  February 19, 2016: Marbille Juntado added input feature of data to User Profile which
                     is writable to the database. 

  File Creation Date: December 11, 2015
  Development Group: UPSMS (Marbille Juntado, Patricia Regarder, Cyan Villarin)
  Client Group: Mrs. Rowena Solamo, Dr. Jaime Caro
  Purpose of this software: Our main goal is to implement a system that allows the monitoring of scholarship system within UP System.
-->
<!DOCTYPE html>
<?php
/* Start a session so that other files can access these variables */
  session_start();
  $_SESSION['currentUserTYPE'] = 'user';
  $_SESSION['currentUserID'] = 1;
  $_SESSION['selectedAppID'] = 1;

  /* Connect to database */
    $conn = new mysqli("localhost","root","","cs192upsms");
  /* Checks Connection */
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="user.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#">UP SMS</a></li>
                <li><a href="javascript:displayDiv('home-div','user-div','apply-div','view-div','financial-div','accomplishments-div','about-div')">Home</a></li>
                <li><a href="javascript:displayDiv('user-div','home-div','apply-div','view-div','financial-div','accomplishments-div','about-div')">User Profile</a></li>
                <li><a href="javascript:displayDiv('apply-div','user-div','home-div','view-div','financial-div','accomplishments-div','about-div')">Apply For Scholarship</a></li>
                <li><a href="javascript:displayDiv('view-div','user-div','apply-div','home-div','financial-div','accomplishments-div','about-div')">View Scholarship Status</a></li>
                <li><a href="javascript:displayDiv('financial-div','user-div','apply-div','view-div','home-div','accomplishments-div','about-div')">Financial Report</a></li>
                <li><a href="javascript:displayDiv('accomplishments-div','user-div','apply-div','view-div','financial-div','home-div','about-div')">Accomplishments Form</a></li>
                <li><a href="javascript:displayDiv('about-div','user-div','apply-div','view-div','financial-div','accomplishments-div','home-div')">About</a></li>
                <li><a href="login.html">Logout</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>

                        <div id="home-div" style="display:block">

                          <h1>Home</h1>

                          <p>Aliquam eget bibendum tortor. Nulla quis dui ornare, dictum lorem eu, dignissim metus. Nulla aliquet purus ac enim condimentum, ac lobortis lacus sollicitudin. Vestibulum at mi ut nunc euismod maximus. Etiam nec purus et massa volutpat rhoncus a eget dolor. Proin convallis felis purus, a dignissim velit auctor vitae. Nulla facilisi. Etiam risus arcu, ultrices sit amet risus vel, scelerisque gravida augue. Sed auctor elit rhoncus vestibulum placerat. Integer convallis viverra viverra. Praesent non semper quam. Morbi vel fringilla nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut non ante facilisis, sodales urna in, accumsan lacus. Cras sit amet aliquam erat. Ut convallis metus vel tincidunt dapibus.</p>
                          <div class="panel panel-info">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Notifications</div>

                            <!-- List group -->
                            <ul class="list-group">
                              <li class="list-group-item">Your application for COOPERATE has been approved.</li>
                              <li class="list-group-item">Your application for MOVE UP has been signed by the OIL Vice President.</li>
                            </ul>
                          </div>

                          <div class="panel panel-primary">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Announcements</div>

                            <!-- List group -->
                            <ul class="list-group">
                              <li class="list-group-item">Deadline of Submission of Accomplishments Form in on July 13, 2015 11:59 PM.</li>
                              <li class="list-group-item">Deadline of Submission of Financial Reports is on December 5, 2015 11:59 PM.</li>
                              <li class="list-group-item">The Application for MOVE UP is now open.</li>
                              <li class="list-group-item">Porta ac consectetur acusamus et iusto odio dignissimos ducimus qui blanditiis praes</li>
                              <li class="list-group-item">Vestibulum at eros corrupti quos dolores et quas molestia voluptas assumenda est, omnisat.</li>
                            </ul>
                          </div>
                        </div>

                        <div id="user-div" style="display:none">
                          <h1>User Profile</h1>

                          <p>Quisque tincidunt maximus purus. Aliquam interdum erat tellus, sed vulputate sapien mollis id. Aliquam sollicitudin nibh vitae maximus vulputate. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum blandit augue id suscipit. Aliquam auctor eget tortor quis volutpat. Suspendisse cursus eros eget nunc cursus, at elementum nunc iaculis. Vestibulum convallis lorem sem. Vestibulum semper congue dolor ut dignissim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>

                          <form method="POST" action="userdata.php" class="form-horizontal" role="form">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="name">Name:</label>
                              <div class="col-sm-10">
                                <input type="name" class="form-control" name="name" placeholder="Enter name">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="nationality">Nationality:</label>
                              <div class="col-sm-10">
                                <input type="name" class="form-control" name="nationality" placeholder="Enter nationality">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="gender">Gender:</label>
                              <div class="col-sm-10">
                                <input type="name" class="form-control" name="gender" placeholder="Enter gender">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="birth">Date of birth:</label>
                              <div class="col-sm-10">
                                <input type="date" class="form-control"name="birth" placeholder="mm/dd/yyyy">
                              </div>
                            </div>       <div class="form-group">
                              <label class="control-label col-sm-2" for="place">Place of Birth:</label>
                              <div class="col-sm-10">
                                <input type="name" class="form-control" name="place" placeholder="Enter place of birth">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="present">Present address:</label>
                              <div class="col-sm-10">
                                <input type="name" class="form-control"name="present" placeholder="Enter present address">
                              </div>
                            </div> 
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="permanent">Permanent address:</label>
                              <div class="col-sm-10">
                                <input type="name" class="form-control" name="permanent" placeholder="Enter permanent address">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="contact">Contact number:</label>
                              <div class="col-sm-10">
                                <input type="name" class="form-control" name="contact" placeholder="Ex: 930xxxxxxx">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="email">UP Email address:</label>
                              <div class="col-sm-10">
                                <input type="name" class="form-control" name="email" placeholder="Ex: john.doe@up.edu.ph">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="degree">Degree program:</label>
                              <div class="col-sm-10">
                                <input type="name" class="form-control" name="degree" placeholder="Enter degree program">
                              </div>
                            </div>                   
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="sn">Student number:</label>
                              <div class="col-sm-10">
                                <input type="name" class="form-control" name="sn" placeholder="20xxxxxxx">
                              </div>
                            </div> 
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="college">College:</label>
                              <div class="col-sm-10">
                                <input type="name" class="form-control" name="college" placeholder="Enter college">
                              </div>
                            </div>               
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="dept">Department:</label>
                              <div class="col-sm-10">
                                <input type="name" class="form-control" name="dept" placeholder="Enter department">
                              </div>

                            </div>
                            <br><input type="submit" value="Save User Profile">
                          </form>
                            <br><p>Mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>

                            <button id=showDivButton style="margin-bottom:15px" type="button" class="btn btn-primary">Edit User Profile</button>

                            <div id="editDiv" style="display:none">
                              <form class="form-inline" role="form">
                                <div class="form-group">
                                    <div class=row-bro>
                                      <b>Full Name</b>
                                      <input type="name" class="form-control" id="lastname" placeholder="Villarin" disabled>
                                      <input type="name" class="form-control" id="firstname" placeholder="Cyan" disabled>
                                      <input type="name" class="form-control" id="middlename" placeholder="Camit" disabled>
                                      <b>Nationality</b> <input type="nationality" class="form-control" id="nationality" placeholder="Filipino" disabled>
                                    </div>

                                    <div class=row-bro>
                                      <b>Gender</b> <input type="gender" class="form-control" id="gender" placeholder="Male" disabled>
                                      <b>Date of Birth</b> <input type="birthdate" class="form-control" id="birthdate" placeholder="06/14/96" disabled>
                                      <b>Place of Birth</b> <input type="birthplace" style="width: 305px" class="form-control" id="birthplace" placeholder="Quezon City, Philippines" disabled>
                                    </div>

                                    <div class=row-bro>
                                      <b>Present Address</b> <input type="address" style="width: 830px" class="form-control" id="presentaddress" value="14A Maligaya st. Brgy. Pinyahan, Quezon City, Philippines, 1101">
                                    </div>

                                    <div class=row-bro>
                                      <b>Permanent Address</b> <input type="address" style="width: 810px" class="form-control" id="permanentaddress" placeholder="Number, Street, District, City, Country, Zip Code">
                                    </div>

                                    <div class=row-bro>
                                      <b>Contact Number</b> <input type="number" class="form-control" id="contactnumber" placeholder="Phone/Cellphone">
                                      <b>Email Address</b> <input type="email" class="form-control" id="emailaddress" placeholder="myname@domain.com">
                                      <b>Degree Course</b> <input type="degree" style="width: 225px" class="form-control" id="degree" placeholder="BS Computer Science" disabled>
                                    </div>

                                    <div class=row-bro>
                                      <b>Student Number</b> <input type="studentnumber" class="form-control" id="studentnumber" placeholder="201310940" disabled>
                                      <b>Department</b> <input type="department" style="width: 295px" class="form-control" id="department" placeholder="Department of Computer Science" disabled>
                                      <b>College</b> <input type="college" class="form-control" id="college" placeholder="College of Engineering" disabled>
                                    </div>

                                    <button type="submit" style="margin-bottom:10px" class="btn btn-default">Submit</button>
                                  </div>
                              </form>
                            </div>
                          </div>
                        </div>

                        <div id="apply-div" style="display:none">
                          <h1>Apply for Scholarship</h1>
                          <p>Please choose the scholarship you want to apply for from the dropdown menu. Read the description of the scholarship. Download the form and follow all instructions given. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Scholarship
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                              <?php
                                $to_query = "select * from scholarship";
                                $sql_result = mysqli_query($conn,$to_query);
                                while($rows=mysqli_fetch_row($sql_result)){
                                  foreach ($rows as $key => $value){
                                    if($key == 1){
                                    ?>
                                    <li role="presentation">
                                      <a role="menuitem" tabindex="-1" href="#">                                                                                                
                                        <?php echo $value; ?>
                                      </a>
                                    </li>
                                    <?php                                         
                                    }
                                  }
                                }
                              ?>                           
                            </ul>  
                          </div>


                            <div id="hideaway" style="display:none;" class="panel panel-info">
                              <div class="panel-heading">Scholarship Description</div>
                              <div class="panel-body">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                              </div>
                            </div>
                            <br>

                            <form method="get" action="forms/MOVEUP.rar">
                              <button type="submit" class="btn btn-success">Download Application Form</button>
                            </form>

                        </div>

                        <div id="view-div" style="display:none">
                          <h1>View Scholarship Status</h1>
                          <p>Nunc elementum aliquet ante. Quisque tempus nec quam sed iaculis. Maecenas nec dapibus nulla. Donec sit amet scelerisque neque. Ut non molestie sem. Aliquam interdum non nisi imperdiet pharetra. Quisque tincidunt bibendum turpis in rutrum. Nulla eu nulla sit amet lorem convallis commodo commodo eu risus. Praesent molestie lorem a urna vestibulum facilisis ut id nulla. Aenean porttitor risus at sagittis congue. Etiam et magna ac mi porttitor viverra quis ut est. Aliquam ac lacinia magna. Suspendisse potenti.</p>
                          <table class="table table-bordered">
                            <thead>
                                <tr>
                                  <th style="width:85%">Scholarship</th>
                                  <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="width:90%">MOVE UP (Mobility for Vigor and Excellence)</td>
                                <td class = "success">Approved</td>
                              </tr>
                              <tr>
                                <td style="width:90%">COOPERATE (Continuous Operational and Outcomes-based Partnership for Excellence in Research and Academic Training Enhancement)</td>
                                <td class = "info">Pending</td>
                              </tr>
                              <tr>
                                <td style="width:90%">MOVE DOWN (Mobility for Walang Masabi and Extras)</td>
                                <td class = "warning">Rejected</td>
                              </tr>
                            </tbody>
                          </table>

                          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>

                        </div>

                        <div id="financial-div" style="display:none">
                          <h1>Financial Report</h1>
                          <p>Proin sit amet velit vel justo euismod luctus vel ac quam. Cras euismod nulla sed nulla pharetra, at luctus lorem congue. In commodo ac lorem iaculis vestibulum. Integer commodo nisi quis orci volutpat, sit amet rutrum sem convallis. Phasellus ornare accumsan lectus eu bibendum. Curabitur non venenatis lacus, at placerat est. Proin bibendum lectus est, vel iaculis lectus porta sed. Mauris id volutpat leo.</p>
                          <div class="form-group">
                            <label for="comment">Write your report here:</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                            <button type="submit" style="margin-top:5px" class="btn btn-default">Submit</button>
                          </div>
                          <p>Duis molestie varius tristique. Sed vehicula ligula eget sollicitudin aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat maximus leo quis cursus. Maecenas egestas fermentum risus. Duis ac erat ligula. Integer neque sapien, tincidunt in leo a, pulvinar varius velit.</p>

                        </div>

                        <div id="accomplishments-div" style="display:none">
                          <h1>Accomplishments Form</h1>
                          <p>Morbi vel elit ut dolor sollicitudin laoreet sit amet in magna. Integer maximus tellus est, ac semper tellus porta eu. Cras sit amet eros sit amet nisi posuere fringilla. Cras pretium dui et magna pulvinar iaculis. Fusce pellentesque nunc non magna finibus, scelerisque vestibulum urna malesuada. Praesent vulputate purus sit amet eleifend interdum. Sed at lacinia mi. Proin non dolor sed nunc aliquet commodo nec non urna.</p>
                          <div class="form-group">
                            <label for="comment">Write your report here:</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                            <button type="submit" style="margin-top:5px" class="btn btn-default">Submit</button>
                          </div>

                          <p>Ut eget tellus lectus. Ut quis orci et tellus condimentum venenatis vel sed erat. Aenean eget pretium felis. Nam finibus vulputate ex, quis vestibulum risus tempus gravida. Sed maximus rhoncus lacus, sit amet ullamcorper purus gravida vitae. Curabitur id tortor non tellus molestie ultrices volutpat quis metus. Ut finibus, sem vel gravida ultricies, sapien augue dignissim metus, a tempus mi quam accumsan odio. In id justo tristique, iaculis magna a, efficitur mauris. Proin convallis finibus orci, id aliquam ex porttitor ac. Fusce non bibendum sem. Ut lacinia vel elit ut rhoncus. Nulla hendrerit ultrices vulputate. Nulla facilisi. Vivamus placerat luctus volutpat. Cras ut scelerisque sem.</p>

                        </div>

                        <div id="about-div" style="display:none">
                          <h1>About</h1>
                          <p>Pellentesque id scelerisque magna. Morbi eget nibh tellus. Nullam eget ullamcorper mauris. Donec quis gravida odio, sit amet elementum lorem. Duis laoreet laoreet sem, in faucibus augue feugiat sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque id pharetra urna, eu lacinia nulla.</p>
                          <p>Quisque et imperdiet sem. Maecenas molestie bibendum mi, nec maximus leo lacinia quis. Quisque neque augue, maximus vel vehicula non, pulvinar vitae ipsum. Duis sit amet gravida velit, at sollicitudin nunc. Quisque nec diam accumsan risus interdum tincidunt ultricies nec orci. Fusce urna ex, auctor non odio ac, molestie viverra enim. Nunc in libero et velit pellentesque placerat sed in felis. Fusce eget mattis leo, in lacinia ante. Nulla et condimentum purus. Duis porttitor ante in quam tempus ultricies.</p>
                          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                          <p>Quisque ac massa metus. Integer vitae aliquam lorem, ut pharetra nisl. Suspendisse euismod ex non volutpat condimentum. Etiam a elit vitae neque lacinia semper. Nulla dapibus nunc tristique accumsan sollicitudin. Maecenas vestibulum varius lorem elementum feugiat. Etiam ultrices aliquam risus euismod molestie. Aliquam erat volutpat.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

    <!-- Display Div Script -->
    <script type="text/javascript">
      var button = document.getElementById('showDivButton'); // Assumes element with id='button'
      button.onclick = function() {
          var div = document.getElementById('editDiv');
          if (div.style.display !== 'none') {
              div.style.display = 'none';
          }
          else {
              div.style.display = 'block';
          }
      };

      function displayDiv(div1, div2, div3, div4, div5, div6, div7)
      {
         d1 = document.getElementById(div1);  // this is the div we want to disply
         d2 = document.getElementById(div2);  // the divs below are the div, pardon for inefficiency
         d3 = document.getElementById(div3);
         d4 = document.getElementById(div4);
         d5 = document.getElementById(div5);
         d6 = document.getElementById(div6);
         d7 = document.getElementById(div7);

         if( d1.style.display == "none" )
         {
            d1.style.display = "block";
            d2.style.display = "none";
            d3.style.display = "none";
            d4.style.display = "none";
            d5.style.display = "none";
            d6.style.display = "none";
            d7.style.display = "none";
         }
      }
    </script>
</body>
</html>