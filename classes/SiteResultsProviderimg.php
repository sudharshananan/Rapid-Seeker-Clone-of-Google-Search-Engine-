<?php
class SiteResultsProviderimg{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    public function getNumResults($term){
        $query = $this->con->prepare("SELECT COUNT(*) as total from sites 
                                        WHERE title LIKE :term
                                        OR url LIKE :term
                                        OR description LIKE :term
                                        OR keywords LIKE :term 
                                        ");
        $searchTerm = "%" . $term . "%";
        $query->bindParam(":term", $searchTerm);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        return $row["total"];
    }
    public function getResultsHtml($page, $pageSize, $term) {
        $fromLimit = ($page - 1) * $pageSize;
        //ex: $pageSize = 20
        //page 1 : ( 1 - 1 ) * 20 = 0
        //page 2 : ( 2 - 1 ) * 20 = 20
        //page 3 : ( 3 - 1 ) * 20 = 40

        $query = $this->con->prepare("SELECT * 
										 FROM sites WHERE title LIKE :term 
										 OR url LIKE :term 
										 OR keywords LIKE :term 
										 OR description LIKE :term
										 ORDER BY clicks DESC
										 LIMIT :fromLimit, :pageSize 
										 ");

        $searchTerm = "%". $term . "%";
        $query->bindParam(":term", $searchTerm);
        $query->bindParam(":fromLimit", $fromLimit, PDO::PARAM_INT);
        $query->bindParam(":pageSize", $pageSize, PDO::PARAM_INT);
        $query->execute();
        $resultsHtml = "<div class='siteResults'>";

        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $id = $row["id"];
            $url = $row["url"];
            $title = $row["title"];
            $description = $row["description"];

            $title = $this->trimField($title, 120);
            $description = $this->trimField($description, 230);
            $resultsHtml .= "<div class='resultContainer'>
								<h3 class='title'>
									<a class='result' href='$url' data-linkId='$id'>
										$title
									</a>
								</h3>
								<span class='url'>$url</span>
								<span class='description'>$description</span>
							</div>";

        }
        $resultsHtml .= "</div>";

        return $resultsHtml;
    }
    private function trimField($string, $characterLimit){
        $dots = strlen($string) > $characterLimit ? "..." : "";
        return substr($string, 0, $characterLimit) . $dots;
    }

}
<html>

<head>
    <title>upload</title>
</head>

<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="">
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
    $Hostname = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'im';

error_reporting(0);
$con = mysqli_connect($Hostname, $dbusername, $dbpassword, $dbname); 
if(isset($_POST['submit'])){
    $filename=addslashes($_FILES["image"]["name"]);
    $tmpname=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $filetype=addslashes($_FILES["image"]["type"]);
    if (!empty($filename)) {
        $query="INSERT INTO `img`(`id`, `name`, `ima`) VALUES (null,'$filename','$tmpname')";
        if (mysqli_query($con,$query)) {
            echo "success";
        } else {
            echo "not success";
        }
        
    } else {
        echo "select the image";
    }
    
}

//display
$query="SELECT * FROM img";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['ima']).'" width="200"   height="200"> ';
}

    ?>
</body>

</html>
	