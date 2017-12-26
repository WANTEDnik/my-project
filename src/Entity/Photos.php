<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Photos
 *
 * @ORM\Table(name="photos", uniqueConstraints={@ORM\UniqueConstraint(name="photos_id_uindex", columns={"id"})}, indexes={@ORM\Index(name="photos_projects_id_fk", columns={"projects_id"})})
 * @ORM\Entity
 */
class Photos
{
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
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    /**
     * @return Projects
     */
    public function getProjects(): Projects
    {
        return $this->projects;
    }

    /**
     * @param Projects $projects
     */
    public function setProjects(Projects $projects): void
    {
        $this->projects = $projects;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=100, nullable=true)
     */
    private $path;

    /**
     * @var \Projects
     *
     * @ORM\ManyToOne(targetEntity="Projects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="projects_id", referencedColumnName="id")
     * })
     */
    private $projects;

}

