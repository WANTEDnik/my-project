<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", uniqueConstraints={@ORM\UniqueConstraint(name="comments_id_uindex", columns={"id"})})
 * @ORM\Entity
 */
class Comments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name_user", type="string", length=25, nullable=true)
     */
    private $nameUser;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=500, nullable=true)
     */
    private $comment;

    /**
     * @var \Projects
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Projects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     * })
     */
    private $project;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNameUser(): string
    {
        return $this->nameUser;
    }

    /**
     * @param string $nameUser
     */
    public function setNameUser(string $nameUser): void
    {
        $this->nameUser = $nameUser;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return Projects
     */
    public function getProject(): Projects
    {
        return $this->project;
    }

    /**
     * @param Projects $project
     */
    public function setProject(Projects $project): void
    {
        $this->project = $project;
    }


}

