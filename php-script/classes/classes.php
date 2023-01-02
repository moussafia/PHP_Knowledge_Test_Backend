<?php
//========================== Class user =================================
class Player
{
  public $id;
  public $name;
  public $score;
  public function getid()
  {
    return $this->id;
  }
  public function setid($id)
  {
    $this->id = $id;
  }
  public function getname()
  {
    return $this->name;
  }
  public function setname($name)
  {
    $this->name = $name;
  }
  public function getscore()
  {
    return $this->score;
  }
  public function setscore($score)
  {
    $this->score = $score;
  }
  public function createUSER()
  {
    $database = new Db();
    $conn = $database->connect_pdo();
    $req = $conn->prepare("INSERT INTO `player`(`name`) VALUES (?)");
    $_SESSION['name'] = $this->name;
    $resultat = $req->execute(array($this->name));
    return $resultat;
  }

  public function scoreUSER()
  {
    $database = new Db();
    $conn = $database->connect_pdo();
    $req = $conn->prepare("INSERT INTO `player`(`score`) VALUES (?)");
    $resultat = $req->execute(array($this->score));
    return $resultat;
  }
}

//========================== question & answers =================================

class Qa
{
  public $id;
  public $question;
  public $choix1;
  public $choix2;
  public $choix3;
  public $choix4;
  public $correctAnswer;

  public function getid()
  {
    return $this->id;
  }
  public function setid($id)
  {
    $this->id = $id;
  }
  public function getquestion()
  {
    return $this->question;
  }
  public function setquestion($question)
  {
    $this->question = $question;
  }
  public function getchoix1()
  {
    return $this->choix1;
  }
  public function setchoix1($choix1)
  {
    $this->choix1 = $choix1;
  }
  public function getchoix2()
  {
    return $this->choix2;
  }
  public function setchoix2($choix2)
  {
    $this->choix2 = $choix2;
  }
  public function getchoix3()
  {
    return $this->choix3;
  }
  public function setchoix3($choix3)
  {
    $this->choix3 = $choix3;
  }
  public function getchoix4()
  {
    return $this->choix4;
  }
  public function setchoix4($choix4)
  {
    $this->choix4 = $choix4;
  }

  public function readQuestion()
  {
    try {
      $database = new Db();
      $conn = $database->connect_pdo();
      $req = "SELECT * FROM `qa`";
      $result = $conn->query($req);
      return $result;
    } catch (PDOException $exp) {
      return $exp->getMessage();
    }
  }


}
?>