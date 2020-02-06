

 a class="btn btn-secondary" href="/Article/WriteOne/{{ article.id }}"><i class="fas fa-file-download"></i></a
 public function writeFile(){
            if((strip_tags($_POST['cssContent']))!=($_POST['cssContent'])){
                $_SESSION['errorcsschange']="Ce code CSS n'est pas conforme";
                header("location/admin");
            }
            $monfichier = fopen('./asset/test.css', 'w');
            fputs($monfichier, $_POST['cssContent']);
            fclose($monfichier);
            header('location:/User');
            return;

        }