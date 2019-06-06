
<?php

	
	include 'db.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Audio Book Reviews">
    <title>Audio Book Reviews | Home</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous">
  </head>
  <body><br>
    <section class="top-bar">
      <div class="container">
        <div class="row">
          <div class="column" style="margin-top: -18px;"><a href="/index.html"><img
                class="top-logo" src="images/new_logo.png" alt="Audio Book Reviews"></a>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Section -->&nbsp;
    <section>
      <div class="container">
        <div class="row tagline" style="margin-top: -23px;"> <em> <em>Between
              nature, man and machines I am firmly on the side of nature but
              fear nature may be on the side of the machines</em></em> </div>
      </div>
    </section>
   
    <!-- End of Section -->
    <!-- Content Section -->
    <form action="post_blog.php" method="post" >
    <section>
      <div class="container">
        <div class="row">
          <p id="wws"></p>
 <h5 style="   margin-top: 13px; height: 42px; text-align: center;"><b><a
                name="wws" id="wws"></a><span style="color: #5c5d5b;"><input type="text" name="post_title" size="35" placeholder=" Enter Post Title"></span></b></h5>
         
          <h4 style="   margin-top: 13px; height: 42px;"><strong><input type="text" name="book_title" size="35" placeholder=" Enter Book Title"><br>
            </strong></h4>
        </div>
        <div class="row">
          <div class="three columns">
            <div class="book-wrapper">
              <div class="book-image"><input type="text" name="image_link" placeholder="image link here"></div>
              <div class="book-description">
                <ul>
                </ul>
                <h6><strong>Author</strong>: <input type="text" name="book_author" size="15"><br>
                  <strong>Narrator</strong>: <input type="text" name="book_narrator" size="12"><br>
                  <strong>Length</strong>: <input type="text" name="book_length" size="15"> <br>
                  <strong>Published</strong>: <input type="text" name="book_published" size="12"></h6>
              </div>
              <div class="book-description"><span style="font-family: Noto Mono;"><strong><br>
                  </strong></span></div>
              <div class="book-description"><strong>Book &nbsp;&nbsp; </strong><span
                  style="font-family: Noto Mono;"><strong><br>
                  </strong></span></div>
              <div class="book-description"><span style="font-family: Noto Mono;"><strong>&nbsp;</strong></span><span
                  style="font-family: Noto Mono;">
                  <input type="number" name="book_star" size="10" placeholder="number of *">
              </div>
              <div class="book-description"><br>
                <span style="font-family: Noto Mono;"></span></div>
              <div class="book-description"><strong>Audio</strong><span style="font-family: Noto Mono;"><strong>&nbsp;
                    <br></strong></span></div>
              <div class="book-description"><span style="font-family: Noto Mono;"><strong>&nbsp;</strong></span><span
                  style="font-family: Noto Mono;">
                  <input type="number" name="audio_star" size="10" placeholder="number of *">

              </div>
              <div class="book-description"><br>
                <span style="font-family: Noto Mono;"></span></div>
              <div class="book-description"><strong>Overall</strong></div>
              <div class="book-description"><span style="font-family: Noto Mono;"><strong>&nbsp;</strong></span><span
                  style="font-family: Noto Mono;">
                  <input type="number" name="overall_star" size="10" placeholder="number of *">

              </div>
              <div class="book-description">
                <div style="text-align: justify;"><br>
                  <em><br>
                  </em>
                  <h6 style="text-align: left;"><em> <img
                          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBw-HtvUg3_oQVv-wrDQDVvKFj9-75WxQx2RWoY8UGDYO0S4OoGg"
                          alt="Image result for amazon logo small" style="width: 28px; height: 25px; margin-top: 0px; margin-left: -1px;"></a><span
                        style="font-family: Noto Mono;"><span style="color: #0fa0ce;">
                        </span><input type="text" name="amazon_link" size="10" placeholder="link here">
                        <br>$<input type="text" name="amazon_price" size="5" placeholder="$$ here"><strong><span
                              style="font-family: Helvetica,Arial,sans-serif;"><span
                                style="white-space: nowrap;"> </span></span></strong></a></span></em></h6>
                </div>
                <div style="text-align: left;"><strong> </strong></div>
                <div style="text-align: left;">
                  <h6><strong><em><span style="font-family: Noto Mono;"></span><span
                          style="font-family: Helvetica,Arial,sans-serif; size=234;">
                          <img
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAulBMVEX/AAABAAD///8AAADe3t5bW1vw8PAEDg5nAwPIGRnAwMC5ubkABwfSEBAIDg7HDg6jDg7s6+vd4eH+CAgiIiLo6Oj8JyfmvLzjyso9PT0dHBzW1tZ3d3caBgaxsbFiGBj5Dw9FBQXKysrtBgajERFTU1NADg5PEBCysrLADw9PGBisEhKsCQlpExNYGRluAwMpCgozDw8+ERG8HBx0c3PItralpaUfKCjILCw0NDRdTEwfDw/nvLz1ysrm8mcUAAAER0lEQVR4nO2d71faMBSGC9eiFqgycQ5R5lSc25ybc3Pu1///bw3P2RkkqbkNt2nT8L5+6ReT+/R5BYEcTTqeQ/0uk4zI5wBJh/59ebooReht98VX4vP2PQUO4VAcOBQHDuFQnE0gREuFgUM4FAcOxQnQoTxCh9Xs/7xDGqfCHCtKXB1SLtx+nquVMAnTbk+Uw4mMcCzcfzrWCfWWpr0tUaYTkrSUjg9l+5+PiWlpBYQihxUQwiEc8oRwCIdSwo1zGD8hWroGIRzCoZQQDuGQJ4TDmh3GT4iWrkEIh3AoJYRDOOQJ4bBmh/EToqVrEMIhHEoJ4RAOeUI4rNlh/IRo6RqEcAiHUkI4hEOeMHiHL1xibiF1ODJWdBqIf8b/+eeofH4fZX01Wf+HkHB6rueVS76xLd05cMkwH6h3KM9J1lIa6/n++NIhjznX0p3EJcPtghOsEodFJ2j3XCba3WYduhHm+plc7UJ+zpsGroTVOtRO5BqRn/N2J4RDV0I4hEPvDuMnREtZQjiEQziEQ5MQDl0J9QW0lCJ8/tVXeM/4RLmSEoQd7Tv0FQNrKeWZ+iZLjyPU3vma6rUPraXU2eKQ7BkF77AKQjhkCOHQlRAO4dC7w/gJ0VKWEA7hEA7h0CSEQ1fC4B3GT4iWsoRwCIdwCIcmIRy6EgbvMH5CtJQlhEM4hEM4NAnh0JUweIfxE6KlLCEcwiEcwqFJCIeuhME7jJ8QLWUJN87hQEjYC9/hQ/Y//VEZaf1sNbPgHSrJShAap6ADd9gRExoTBeZw9aI8YeG3h+pQ0VmS8PklqnAYPyFayhLCIRzCIRyahHDoShi8QyGh7a+3rEVortdwS3+d6lm+OCCajQ65jGZKS4mMBfNGW5oYf3Xo4g1ZfBRG2f/0zFjSaaCqHZpZEC4XLEm46vD0TLZ/5Q6LCAsfMEqmCsI6HbpfwGEZQjiUEwbmMH5CtHQNQjiEQykhHMoJ4RAOpYSaQw+EorSgpVcDUXI5oeeWHgz3RBkK9/fvsOn4d9h04DAKQjhsekRh/D/jNx20NArCjXf4qekRhdnNOYefXyu5vW96ZC7vbpWB3w8Yh8bnRZdNE3DZt31YV+RQvWgHoe1NA9OhbrQFhFaCTSBES1tACIdw2DQBFziEwzYQMg7jJ0RLW0C46Q4LTgqqDj80TcDlRp9YTXKiZ06qw4/7llzeuB3+XJPh0jbDjupw/FXlSYxDyTP7LdFydeEf8ODOPoM6b6rxmIQPZP/JVC7obR2EV6XnWVzMezwh8/Cq3LG6CMtPBEK0FA59EcIhHMIhHPonrNZh/ITM77lqS8/8EyZKS7nwhNk8tWWi3E/6cr/rP3fLPWlinS5N5ycsYbdnS3emfMJKg+0aMlg6pJl9vp7x7xYLCO25dnr5WFFW9rt2HdiZUHVY+8XCoX9Ch4fa6lMLIRy232H8hGgpHMIhHPonhEM4rNnhX8Zor9cWW6vNAAAAAElFTkSuQmCC"
                              alt="Image result for torrent magnet" style="width: 22px; height: 25px; margin-left: 2px;"></a>&nbsp;Torrent <input type="text" name="torrent_download">
                            </a></span></em></strong></h6>
                </div>
                <div style="text-align: left;"><strong> </strong></div>
                <div style="text-align: justify;">
                  <h6 style="text-align: left;"><strong><em><span style="font-family: Helvetica,Arial,sans-serif; size=234;">
                        </span><span style="font-family: Helvetica,Arial,sans-serif;"><img
                              src="data:image/png;base64,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"
                              alt="Image result for mega nz logo" style="width: 31px; height: 29px; margin-left: -2px;"></a>&nbsp;
                          Mega
                            <input type="text" name="mega_download"></span></em></strong><a href="https://mega.nz/#F%21j2ACwaSB%21OZ8p3_jXSHYHS985f9Qp6g"><span
                        style="font-family: Helvetica,Arial,sans-serif;"><strong></strong></span></a><span
                      style="font-family: Helvetica,Arial,sans-serif;"><strong>
                      </strong><sup>*</sup></span></h6>
                  <address> </address>
                </div>
              </div>
            </div>
          </div>
          <div class="nine columns" style="height: 36px;"><br>
          </div>
          <div class="nine columns">
<textarea rows="400" cols="100" name="post_text">
Enter post text here .. upto 5000 characters . 
</textarea>
          	<br>
          </div>
         
         
          <!-- End of Full Row Paragraph --> </div>
        <hr>
        <!-- Adding Horizontal Line Before End of Section --> 
    <input type="submit" name="post">
</form>

    </div>

    </section>
</body>
</html>

<?php

	if (isset($_POST['post'])) {
					


					$post_title = $_POST['post_title'];
					$book_title = $_POST['book_title'];
					$image_link = $_POST['image_link'];
					$book_author = $_POST['book_author'];
					$book_narrator = $_POST['book_narrator'];
					$book_length = $_POST['book_length'];
					$book_published = $_POST['book_published'];
					$book_star = $_POST['book_star'];
					$audio_star = $_POST['audio_star'];
					$overall_star = $_POST['overall_star'];
					$amazon_link = $_POST['amazon_link'];
					$amazon_price = $_POST['amazon_price'];
					$torrent_download = $_POST['torrent_download'];
					$mega_download = $_POST['mega_download'];
					$post_text = $_POST['post_text'];
			$post_text =  nl2br($post_text);


					

$data = [
    'post_title' => $post_title,
    'book_title' => $book_title,
    'image_link' => $image_link,
    'book_author' => $book_author,

    'book_narrator' => $book_narrator,
    'book_length' => $book_length,
    'book_published' => $book_published,
    'book_star' => $book_star,

     'audio_star' => $audio_star,
    'overall_star' => $overall_star,
    'amazon_link' => $amazon_link,
    'amazon_price' => $amazon_price,

    'torrent_download' => $torrent_download,
    'mega_download' => $mega_download,
    'post_text' => $post_text,

];
$sql = "INSERT INTO `info` (`post_title`,
`book_title`,
`image_link`,
`book_author`,
`book_narrator`,
`book_length`,
`book_published`,
`book_star`,
`audio_star`,
`overall_star`,
`amazon_link`,
`amazon_price`,
`torrent_download`,
`mega_download`,
`post_text`) VALUES 
(	

:post_title,
:book_title,
:image_link,
:book_author,
:book_narrator,
:book_length,
:book_published,
:book_star,
:audio_star,
:overall_star,
:amazon_link,
:amazon_price,
:torrent_download,
:mega_download,
:post_text)
";
$stmt= $conn->prepare($sql);
$stmt->execute($data);



			}

 ?>