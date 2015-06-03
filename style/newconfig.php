<?php 

	$siteTitle = "Code Cuts";
	$siteTitleShort = "CC";
	$useStylesheet = "style/style.css";
    $fileTypePreview = "txt";
    $fileTypeCode = "txt";

	$metaAuthor = "Alexis Dicks-Stephen";
	$metaTitle = "HTML, CSS, JavaScript and PHP Tutorials";
	$metaKeywords = "html, css, javascript, php";
    
    final class Code
    {
        private $con;
        private $codeID, $title, $sourcecode, $author, $showPreview, $showCode;
        
        public function  __construct()
        {
             $this->con = new PDO('mysql:host=localhost;dbname=cc_test', 'cc_tester', 'cctest');
        }
            
        public function displayCode($codeID) 
        {
            $questionQry = "SELECT * FROM code WHERE id = $codeID";
            $result = $this->con->query($questionQry);
            $row = $result->fetch();
            $id = $row["id"];
            $title = $row['title'];
            $sourcecode = $row['sourcecode'];
            $author = $row['author'];
            $showPreview = $row['showPreview'];
            $showCode = $row['showCode'];
            $tagMe = $this->displayTags($id);
            $catMe = $this->displayCats($id);
                        
            $statement = '<article id="codeArea" role="main">';
            $statement .= '<div id="codeBanner">';
                        
                        
            $statement .= '<h3>Filed Under: ' . $catMe . '</h3> | <h4>' . $title . '</h4>' . '<h5>Tags: ' . $tagMe . '</h5>';
            $statement .= '<iframe id="previewArea" src="codepreview.php?id=' . $id . '"></iframe>';
            $statement .= '<textarea id="previewCode">' . $sourcecode . '</textarea>';
            
            $statement .= '</div></article>';
            return $statement;
        }
        
        public function displayTags($codeID)
        {
            $tagQry = "SELECT name FROM tag 
                        INNER JOIN tagmap
                        ON tagmap.code_id = $codeID
                        AND tag.id = tagmap.tag_id
                        ORDER BY name ASC";
            $result = $this->con->query($tagQry);
            $rows = $result->fetchAll();
            
            $statement = '';
            
            foreach ($rows as $row) {
                    $statement .= $row['name'] . ', ';
            }
            
            $statement = rtrim($statement,', ');
            
            return $statement;
        }
        
        public function displayCats($codeID)
        {
            $catQry = "SELECT name FROM category 
                        INNER JOIN catmap
                        ON catmap.code_id = $codeID
                        AND category.id = catmap.cat_id
                        ORDER BY name ASC";
            $result = $this->con->query($catQry);
            $cats = $result->fetchAll();
            
            $kitties = '';
            
            foreach ($cats as $cat) {
                    $kitties .= $cat['name'] . ', ';
            }
            
            $kitties = rtrim($kitties,', ');
            
            return $kitties;
        }
        
        public function getSource($codeID) 
        {
            $questionQry = "SELECT * FROM code WHERE id = $codeID";
            $result = $this->con->query($questionQry);
            $row = $result->fetch();
            $sourcecode = $row['sourcecode'];
            return $sourcecode;
        }
        
        public function listCats()
        {
            $catQry = "SELECT * FROM category 
                    JOIN catmap
                    ON category.id = catmap.cat_id
                    ORDER BY name ASC";
            $result = $this->con->query($catQry);
            $cats = $result->fetchAll();
            
            $statement[] = "";
            
            foreach ($cats as $cat) {
                    $cName = $cat['name'];
                    echo '<h3 class="sidebarHead" onclick="hideTuts(\'heading'.$cName.'\')">'.$cName.'</h3>
	<ul id="heading'.$cName.'">';
                    $statement[] = $cName;
                    $codeList = $this->listCodes($cat['cat_id']);
                    echo '</ul>';
            }
                        
            return $statement;
        }
        
        public function listCodes($categoryID)
        {
            $catQry = "SELECT *
                    FROM code 
                    WHERE id = 
                      (SELECT code_id 
                        FROM catmap
                        WHERE cat_id = $categoryID)
                    ORDER BY title ASC";
            $result = $this->con->query($catQry);
            $cats = $result->fetchAll();
            
            $kitties = '';
            
            foreach ($cats as $cat) {
                    $codeTitle = $cat['title'];
                    $codeID = $cat['id'];
                    echo  '<a href="newindex.php?cc=' . $codeID . '">' . $codeTitle . '</a><br>';
            }
            
            $kitties = rtrim($kitties,', ');
            
            return $kitties;
        }
        
        public function searchTags($thisTag) {
            // this is currently just a c&p of the display Tags fnctn
            $catQry = "SELECT *
                    FROM code 
                    WHERE id = 
                    (SELECT code_id 
                    FROM tagmap
                    INNER JOIN tag
                    ON tagmap.tag_id = tag.id
                    WHERE tag.name = \"$thisTag\")
                    ORDER BY title ASC";
            $result = $this->con->query($catQry);
            $cats = $result->fetchAll();
            
            if ($cats) {
                echo '<h4>Search results: '.$thisTag.'</h4>';
            } else {
                echo '<h4>No results for '.$thisTag.'</h4>';
            }
            
            $kitties = '';
            foreach ($cats as $cat) {
                    $codeTitle = $cat['title'];
                    $codeID = $cat['id'];
                    echo  '<a href="newindex.php?cc=' . $codeID . '&q='.$thisTag.'">' . $codeTitle . '</a><br>';
            }
            
            $kitties = rtrim($kitties,', ');
            
            return $kitties;
        }
    }
?>