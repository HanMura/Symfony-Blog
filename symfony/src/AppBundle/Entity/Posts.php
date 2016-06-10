<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="posts")
 */
class Posts
{

  /**
   * @ORM\Column(name="pkid", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $pkid;

  /**
   * @ORM\Column(name="header", type="text")
   */
  private $header;
  /**
   * @ORM\Column(name="content", type="text")
   */
  private $post;

  /**
   * @ORM\Column(name="posted", type="datetime", nullable=false)
   * @ORM\Version
   */
  private $time;

 /**
  * @ORM\Column(name="media", type="text")
  */
  private $image;

  public function getTime(){
    return $this->time->format("m/d/Y H:i:s");
  }

  public function getContent(){
    return $this->post;
  }

  public function getHeader(){
    return $this->header;
  }

  public function getMedia(){
    return $this->image;
  }

}

?>
